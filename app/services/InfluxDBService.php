<?php

namespace App\Services;

use InfluxDB2\Client;
use InfluxDB2\Model\WritePrecision;
use InfluxDB2\Api\WriteApi;
use InfluxDB2\Api\QueryApi;

class InfluxDBService
{
    protected $client;
    protected $bucket;
    protected $org;
    protected $writeApi;
    protected $queryApi;

    public function __construct()
    {
        $this->client = new Client([
            "url" => env('INFLUXDB_URL'),
            "token" => env('INFLUXDB_TOKEN'),
            "org" => env('INFLUXDB_ORG'),
            "precision" => WritePrecision::S 
        ]);

        $this->bucket = env('INFLUXDB_BUCKET');
        $this->org = env('INFLUXDB_ORG');
        $this->writeApi = $this->client->createWriteApi();
        $this->queryApi = $this->client->createQueryApi();
    }

    public function writeData(string $measurement, array $fields, array $tags = [])
    {
        $point = [
            'measurement' => $measurement,
            'tags' => $tags,
            'fields' => $fields,
            'time' => now()->timestamp
        ];

        try {
            $this->writeApi->write([
                'bucket' => $this->bucket,
                'org' => $this->org,
                'record' => $point
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Erro ao escrever dados no InfluxDB: ' . $e->getMessage());
        }
    }

    public function queryData(string $query)
    {
        try {
            return $this->queryApi->query($query);
        } catch (\Exception $e) {
            throw new \Exception('Erro ao consultar dados no InfluxDB: ' . $e->getMessage());
        }
    }
}

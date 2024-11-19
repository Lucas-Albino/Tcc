<?php

namespace App\Http\Controllers;

use App\Services\InfluxDBService;

class ParkingController extends Controller
{
    protected $influxDBService;

    public function __construct(InfluxDBService $influxDBService)
    {
        $this->influxDBService = $influxDBService;
    }
    
    public function home()
    {
        $query = 'from(bucket: "ESP_BUCKET") 
          |> range(start: -1h) 
          |> filter(fn: (r) => r._measurement == "estacionamento_inteligente")';

        $result = $this->influxDBService->queryData($query);

        dd($result);

        return view('home', compact('result'));
    }

    public function sector1()
    {
        $vagas = [
            'a1' => 1,
            'a2' => 0,
            'a3' => 1,
            'a4' => 1,
            'a5' => 0
        ];

        return view('sectors.sector1', compact('vagas'));
    }

    public function sector2()
    {
        $vagas = [
            'b1' => 1,
            'b2' => 0,
            'b3' => 1,
            'b4' => 1,
            'b5' => 0
        ];

        return view('sectors.sector2', compact('vagas'));
    }

    public function sector3()
    {
        $vagas = [];

        return view('sectors.sector3', compact('vagas'));
    }

    public function freeParking()
    {
        $vagas = [
            'a1' => 1,
            'b2' => 1,
            'a3' => 1,
            'b4' => 1,
            'a5' => 1
        ];

        return view('sectors.freeParking', compact('vagas'));
    }
}

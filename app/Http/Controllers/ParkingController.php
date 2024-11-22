<?php

namespace App\Http\Controllers;

use App\Services\InfluxDBService;

class ParkingController extends Controller
{
    protected $influxDBService;
    protected $result;

    public function __construct(InfluxDBService $influxDBService)
    {
        $this->influxDBService = $influxDBService;

        $query = 'from(bucket: "ESP_BUCKET") 
        |> range(start: -1h) 
        |> filter(fn: (r) => r._measurement == "estacionamento_inteligente")';

        $this->result = $this->influxDBService->queryData($query);
    }
    
    public function home()
    {
        return view('home');
    }

    public function sector1()
    {
        $setor1 = [];

        foreach ($this->result as $value) {
            if(end($value->records)->values["setor"] == "Setor 1" ){
                $setor1[] = end($value->records)->values;
            }

            if(end($value->records)->values["setor"] == "Setor 2" ){
                $setor2[] = end($value->records)->values;
            }
        }

        return view('sectors.sector1', compact('setor1'));
    }

    public function sector2()
    {
        $setor2 = [];

        foreach ($this->result as $value) {
            if(end($value->records)->values["setor"] == "Setor 2" ){
                $setor2[] = end($value->records)->values;
            }
        }

        return view('sectors.sector2', compact('setor2'));
    }

    public function sector3()
    {
        $setor3 = [];

        foreach ($this->result as $value) {
            if(end($value->records)->values["setor"] == "Setor 3" ){
                $setor3[] = end($value->records)->values;
            }
        }

        return view('sectors.sector3', compact('setor3'));
    }

    public function freeParking()
    {
        $query = 'from(bucket: "ESP_BUCKET") 
        |> range(start: -1h) 
        |> filter(fn: (r) => r._measurement == "estacionamento_inteligente")';

        $result = $this->influxDBService->queryData($query);

        $freeParking = [];
        foreach ($result as $value) {
            if(end($value->records)->values["_value"] == true){
                $freeParking[] = end($value->records)->values;
            }
        }
        return view('sectors.freeParking', compact('freeParking'));
    }
}

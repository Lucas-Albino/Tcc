<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function home()
    {
        return view('home');
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

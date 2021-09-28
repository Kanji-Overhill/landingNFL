<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade;
use Carbon\Carbon;

class GeneradorController extends Controller
{
    public function imprimir($folios){
        $folios = explode ( ';', $folios);
        $pdf = \PDF::loadView('ejemplo', compact('folios'));
        return $pdf->download('folios-soc.pdf');
   }
}

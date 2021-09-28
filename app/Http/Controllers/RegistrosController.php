<?php

namespace App\Http\Controllers;
use App\Models\Registros;
use App\Models\Folios;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function insertRegistroAsesor(Request $request)
    {
        if($request->file('imagen')) {
            $file = $request->file('imagen');
            $file_name = $file->getClientOriginalName();
            $imagen = time().'_'.$file_name;

            $location = 'img/fotos';

            $file->move($location,$imagen);
            $registro = Registros::insertGetId([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'tipo' => $request->prestamo,
                'oficina' => $request->oficina,
                'monto' => $request->monto,
                'imagen' => $imagen,
                'folio_sisec' => $request->folio_sisec
            ]);
            $folio_1 = Folios::insertGetId([
                'registro_id' => $registro,
            ]);
            return view('home',['confirmacion' => true, 'folio_1' => $folio_1]); 
        }else{
            return view('home',['error' => true]);
        }
    }
    public function insertRegistroCliente(Request $request)
    {
        if ($request->tipo == "null") {
            $tipo = $request->prestamo;
        }else{
            $tipo = $request->tipo;
        }
        if($request->file('imagen')) {
            $file = $request->file('imagen');
            $file_name = $file->getClientOriginalName();
            $imagen = time().'_'.$file_name;

            $location = 'img/fotos';
            $file->move($location,$imagen);
            $registro = Registros::insertGetId([
                'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'tipo' => $tipo,
                'oficina' => $request->oficina,
                'monto' => $request->monto,
                'imagen' => $imagen,
                'descripcion' => $request->descripcion
            ]);
            $folios = array();
            if ($request->prestamo == "c-hipotecario") {
                if ($request->monto > 1000000) {
                    $divisor = $request->monto/1000000;
                    $divisor = number_format($divisor,0);
                    for ($i=1; $i <=$divisor ; $i++) { 
                        $folio = Folios::insertGetId([
                            'registro_id' => $registro,
                        ]);
                        array_push($folios, $folio);
                    }
                    $folios = implode(", ", $folios);
                    return view('home',['confirmacion' => true, 'folios' => $folios]); 
                }else{
                    $folio_1 = Folios::insertGetId([
                        'registro_id' => $registro,
                    ]);
                    return view('home',['confirmacion' => true, 'folio_1' => $folio_1]); 
                }
            }else{
                $folio_1 = Folios::insertGetId([
                    'registro_id' => $registro,
                ]);
                return view('home',['confirmacion' => true, 'folio_1' => $folio_1]);
            }
        }else{
            return view('home',['error' => true]);
        }
    }
}

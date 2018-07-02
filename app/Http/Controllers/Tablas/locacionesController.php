<?php

namespace App\Http\Controllers\tablas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modal\Tablas\Comunas;
use App\modal\Tablas\Regiones;

class locacionesController extends Controller
{
    public function locaciones_Query(Request $request){

        $comunas = Comunas::with('regiones')
            ->paginate(12);
        $regiones = Regiones::orderBY('name')->get();
        return [
            'pagination' => [
                'total'         => $comunas->total(),
                'current_page'  => $comunas->currentPage(),
                'per_page'      => $comunas->perPage(),
                'last_page'     => $comunas->lastPage(),
                'from'          => $comunas->firstItem(),
                'to'            => $comunas->lastItem(),
            ],
            'comunas' => $comunas,
            'regiones' => $regiones,
        ];
    }

    public function hayComunas(Request $request) {
        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'elcomunas' => Comunas::where('regiones_id', $request->tipo)
                ->orderBy('name')
                ->get(),
        ];
    }
}

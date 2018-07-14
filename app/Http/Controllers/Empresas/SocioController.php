<?php

namespace App\Http\Controllers\Empresas;

use App\Exports\SociosExport;
use App\Http\Requests\SociosCreateRequest;
use App\Http\Requests\SociosEditRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\modal\empresas\socio;
use App\modal\empresas\empresa;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class SocioController extends Controller
{
     public function index()
    {
        $socios=socio::with('empresas')->get();
        return view('empresas.socios.listasocios', compact('socios'));
    }

    public function create(){
        $empresas = empresa::orderBy('name_corto','ASC')->get();
        $socios = new socio;
        return view('empresas.socios.createSocios', compact('socios','empresas'));
    }
    public function store(SociosCreateRequest $request)
    {
        $socios = new socio();
        $socios->rut = ltrim($request->rut, "0");
        $socios->name = $request->name;
        $socios->email = $request->email;
        $socios->fono = $request->fono;
        $socios->rep_legal = $request->rep_legal;
        $socios->porcen = $request->porcen;
        $socios->apopago = $request->apopago;
        $socios->apopend = $request->apopend;
        $socios->aporte = $request->aporte;
        $socios->empresa_id = $request->empresa_id;
        $socios->empNamCorto =DB::table('empresas')->where('id',$request->empresa_id)->value('name_corto');
        $socios->save();
        return \Redirect::route( "listasocios" )->with("message" ,'El socio fue ingresada'  );
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $empresas = empresa::orderBy('name_corto','ASC')->get();
         $socios = socio::findOrFail($id);
         return view('empresas.socios.editSocios', compact('socios','empresas'));
    }


    public function update(SociosEditRequest $request, $id)
    {

         $socios=socio::findOrFail($id);
        $socios->rut = ltrim($request->rut, "0");
        $socios->name = $request->name;
        $socios->email = $request->email;
        $socios->fono = $request->fono;
        $socios->rep_legal = $request->rep_legal;
        $socios->porcen = $request->porcen;
        $socios->apopago = $request->apopago;
        $socios->apopend = $request->apopend;
        $socios->aporte = $request->aporte;
        $socios->empresa_id = $request->empresa_id;
        $socios->empNamCorto =DB::table('empresas')->where('id',$request->empresa_id)->value('name_corto');
        $socios->save();
        return \Redirect::route( "listasocios" )->with("message" ,'El socio fue modificado' );
    }

    public function shownotas($id){
        $socios = socio::findOrFail($id);
        return view('empresas.socios.noteSocios', compact('socios'));
    }
    public function updatenota(Request $request, $id) {
        $socios=socio::findOrFail($id);
        $socios->notas = $request->editor1;
        $socios->save();
        return \Redirect::route( "listasocios" )->with("message" ,'Las notas del socio fueron modificadas');
    }

    public function destroy($id) {
        socio::find($id)->delete();
        return \Redirect::route( "listasocios" )->with("deleted" , $id );

    }

    public function restore($id) {
        //Indicamos que la busqueda se haga en los registros eliminados con withTrashed
        $socios = socio::withTrashed()->where('id', '=', $id)->first();
        //Restauramos el registro
        $socios->restore();
        return \Redirect::route( "listasocios" )->with("message" ,'El Socio fue restaurado' );
    }

    function export()
    {
        return Excel::download(new SociosExport, 'socios.xlsx');
    }

}

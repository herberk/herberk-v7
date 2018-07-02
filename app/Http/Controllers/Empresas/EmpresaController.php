<?php

namespace App\Http\Controllers\Empresas;


use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEmpresasRequest;
use App\Http\Requests\EditEmpresasRequest;
use App\Http\Controllers\Controller;
use App\modal\empresas\empresa;
use App\model\empresas\banco;
use App\modal\Tablas\Atributo;
use App\modal\empresas\contacto;
use App\modal\empresas\socio;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class EmpresaController extends Controller
{
   /* public function empresaQuery(Request $request){
        if (!$request->ajax()) {
            return redirect('/');
        }
        return [
            'empresas' => empresa::orderBy('name')->get(),
        ];
     }*/


    public function index(Request $request){
//        $users = User::filterAndPaginate($request->get('name'), $request->get('type'));
    $empresas = empresa::orderBy('name_corto','ASC')->get();
//    $empresa = empresa::findOrFail(1);,'empresa'
        return view('empresas.lista', compact('empresas'));
//        if($empresas==null){
//            return \Redirect::route( "listempresa" )->with("message" ,'No hay empresas'  );
//        };

    }


    public function create() {
        $contactos = Contacto::orderBy('name','ASC')->pluck('name', 'id')->toArray();
        $empresas = new empresa;
        return view('empresas.create', compact('Atributos','Ciudades','Regiones', 'Comunas','contactos','empresas'));;
    }


    public function storempresa(CreateEmpresasRequest $request){

        $emprsas = new empresa();
        $emprsas->rut = ltrim($request->rut, "0");
        $emprsas->name = $request->name;
        $emprsas->name_corto = $request->name_corto;
        $emprsas->arti_id = $request->arti_id;
        $emprsas->tipo =  DB::table('atributos')->where('id',$request->arti_id)->value('name');
        $emprsas->actividad = $request->actividad;
        $emprsas->direccion = $request->direccion;
        $emprsas->region_id = $request->region_id;
        $emprsas->region = DB::table('regiones')->where('id',$request->region_id)->value('name');
        $emprsas->comuna_id = $request->comuna_id;
        $emprsas->comuna = DB::table('comunas')->where('id',$request->comuna_id)->value('name');
        $emprsas->ciudad_id = $request->ciudad_id;
        $emprsas->ciudad =  DB::table('ciudades')->where('id',$request->ciudad_id)->value('name');
        $emprsas->codpostal = $request->codpostal;
        $emprsas->email = $request->email;
        $emprsas->fono = $request->fono;
        $emprsas->fe_inicio = $request->fe_inicio;
        $emprsas->tipo_tri = $request->tipo_tri;
        $emprsas->segmento = $request->segmento;
        $emprsas->codigo = $request->giro_codigo;
        $emprsas->giro = $request->giro;
        $emprsas->logo = 'logo';
        $emprsas->capital = str_replace(',','',$request->capital);
        $emprsas->notario=$request->notario;
        $emprsas->fe_notario=$request->fe_notario;
        $emprsas->repertorio=$request->repertorio;
        $emprsas->fe_diario=$request->fe_diario;
        $emprsas->reg_comercio=$request->reg_comercio;
        $emprsas->save();
        return \Redirect::route( "listempresa" )->with("message" ,'La empresa fue ingresada'  );
    }


    public function show($id){
        $empresas = empresa::findOrFail($id);
        $contactos = Contacto::where('empresa_id',($id))->get();
        $socios = socio::Where('empresa_id',($id))->get();
       return view('empresas.ShowEmpresa', compact('empresas','contactos','socios'));
    }

    public function pdf($id,$pd){
        /**
         * toma en cuenta que para ver los mismos
         * datos debemos hacer la misma consulta
         **/

        $empresas = empresa::findOrFail($id);
        $contactos = Contacto::where('empresa_id',($id))->get();
        $pdf = PDF::loadView('empresas.pdfempresa', compact('empresas','contactos'));
       if ($pd=='1'){
           return $pdf->download('empresa.pdf');
      } else{
           return $pdf->stream('empresa.pdf');
        }
    }


    public function edit($id)
    {
         $contactos = Contacto::orderBy('name','ASC')->pluck('name', 'id')->toArray();
         $empresas = empresa::findOrFail($id);
        $region = 9;
        $banco = banco::orderBy('name')->get();
        return view('empresas.edit', compact('empresas','contactos','region','banco'));

    }


    public function update(EditEmpresasRequest $request, $id)
    {


        $emprsas=empresa::findOrFail($id);
//        $emprsas->rut = ltrim($request->rut, "0");
        $emprsas->name = $request->name;
        $emprsas->name_corto = $request->name_corto;
        $emprsas->arti_id = $request->arti_id;
        $emprsas->tipo = DB::table('atributos')->where('id',$request->arti_id)->value('name');
        $emprsas->actividad = $request->actividad;
        $emprsas->direccion = $request->direccion;
        $emprsas->region_id = $request->region_id;
        $emprsas->region = DB::table('regiones')->where('id',$request->region_id)->value('name');
        $emprsas->comuna_id = $request->comuna_id;
        $emprsas->comuna = DB::table('comunas')->where('id',$request->comuna_id)->value('name');
        $emprsas->ciudad_id = $request->ciudad_id;
        $emprsas->ciudad = DB::table('ciudades')->where('id',$request->ciudad_id)->value('name');
        $emprsas->codpostal = $request->codpostal;
        $emprsas->email = $request->email;    
        $emprsas->fono = $request->fono;
        $emprsas->fe_inicio = $request->fe_inicio;
        $emprsas->tipo_tri = $request->tipo_tri;
        $emprsas->segmento = $request->segmento;
        $emprsas->codigo = $request->codigo;
        $emprsas->giro = $request->giro;
        $emprsas->logo = 'logo';
        $emprsas->capital = str_replace(',','',$request->capital);
        $emprsas->notario=$request->notario;
        $emprsas->fe_notario=$request->fe_notario;
        $emprsas->repertorio=$request->repertorio;
        $emprsas->fe_diario=$request->fe_diario;
        $emprsas->reg_comercio=$request->reg_comercio;
        $emprsas->notas = $request->editor1;
        $emprsas->save();

      //$bancos = array_merge($request->namebco, $request->ctacte, $request->firman, $request->montolinea);
        dd( $request);
        $namebco = $request->namebco;

        foreach ($namebco as $valor) {
            $bancos = new banco();
            $bancos->name =$request->namebco;


            $bancos->save();
            }

        $bancos->ctacte = $banco;
        $bancos->firman = $banco;
        $bancos->montolinea = 0;
        $bancos->empresa_id = $request->id;
        return \Redirect::route( "listempresa" )->with("message" ,'La empresa fue modificado');
    }

    public function shownotas($id){
        $empresas = empresa::findOrFail($id);
        return view('empresas.note', compact('empresas'));
    }


    public function updatenota(Request $request, $id) {
        $emprsas=empresa::findOrFail($id);
        $emprsas->notas = $request->editor1;
        $emprsas->save();
        return \Redirect::route( "listempresa" )->with("message" ,'Las notas de la empresa fueron modificadas');
    }

   public function destroy($id)
    {
        $contact = empresa::find($id);
        $contact->delete();
       return \Redirect::route( "listempresa" )->with("deleted" , $id );
    }

    public function restore( $id ){
        $empresas = empresa::withTrashed()->where('id', '=', $id)->first();
        $empresas->restore();
        return \Redirect::route( "listempresa" )->with("message" ,'La empresa fue restaurada' );
    }

    public function aexcel()
    {
        Excel::create('Listado de Empresas', function ($excel) {
            $excel->sheet('Empresas', function ($sheet) {
                $empresas = empresa::all();
                //$users = user::select('id', 'name', 'username', 'email', 'type','active')->get();
                $sheet->fromArray($empresas);
            });
        })->download('xls');
    }
}

<?php
namespace App\Http\Controllers\Tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\modal\Tablas\giros;
use App\modal\Tablas\Ciudades;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class TablasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ciudadQuery(Request $request){

        $ciudades = Ciudades::orderBY('name')->paginate(10);
     return [
         'pagination' => [
             'total'         => $ciudades->total(),
             'current_page'  => $ciudades->currentPage(),
             'per_page'      => $ciudades->perPage(),
             'last_page'     => $ciudades->lastPage(),
             'from'          => $ciudades->firstItem(),
             'to'            => $ciudades->lastItem(),
         ],
         'ciudades' => $ciudades
     ];
    }

     public function create(Request $request){
         $this->validate($request, [
             'name'   => 'required|max:25|unique:ciudades',
             'codigo' => 'max:5',
         ]);
         $ciudades=new Ciudades();
         $ciudades->name=$request->name;
         $ciudades->codigo =$request->codigo;
         $ciudades->save();

         return response()->json([
             'ciudades' => $ciudades,
             'message' => 'Success'
         ], 200);
     }

    public function destroy($id)
    {
        Ciudades::find($id)->delete();
    }

    public function update(Request $request, $id )
    {
        $this->validate($request, [
            'name' => 'required|max:25',
            Rule::unique('ciudades')->ignore($request->id),
            'codigo' => 'max:5',
         ]);
        $ciudades = Ciudades::find($request->id);
        $ciudades->name= request('name');
        $ciudades->codigo = request('codigo');
        $ciudades->save();

        return response()->json([
            'message' => 'Task updated successfully!'
        ], 200);

    }

    public function giros(Request $request){
        $giros = Giros::filterAndPaginate($request->get('name'),  $request->get('type'), $request->get('codigo'));
        return view('tablas.giros',compact( 'giros'));
    }

    public function bexcel(Request $request){
        Excel::create('Listado de Giros', function ($excel) {
            $excel->sheet('Giros', function ($sheet) {
                $giros = giros::select('id', 'codigo', 'name', 'afecto', 'cat_tribut','desgiros_id')->get();
                $sheet->fromArray($giros);
            });
        })->download('xls');
    }

}

@extends('layouts.app')
@section('title',"Lista de Empresas")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
<div class="modal fade bd-example-modal-lg" id="NoteModalLong" tabindex="-1" role="dialog" aria-labelledby="NoteModalLongTitle" aria-hidden="true"  data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NoteModalLongTitle">Empresa: {{$empresas->name}}&nbsp;&nbsp;&nbsp; RUT: {{$empresas->rut}}</h5>

            </div>
            <div class="modal-body">
                <dt><u>Datos de la Empresas</u></dt>
                    <div class="form-row ">
                        <div class="col-sm-4">
                             <dd>&nbsp;  Nombre Corto:&nbsp;  {{$empresas->name_corto}} </dd>
                        </div>
                         <div class="col-sm-8">
                               <dd > Tipo de sociedad:&nbsp;  {{$empresas->tipo}} </dd>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="col-sm-12">
                            <dd > Actividad empresarial:&nbsp;  {{$empresas->actividad}} </dd>
                        </div>
                    </div>

                    <div class="form-row ">
                        <div class="col-sm-4">
                             <dd > Ciudad:&nbsp; {{$empresas->ciudad}}  </dd>
                        </div>
                        <div class="col-sm-8">
                             <dd > Domicilio:&nbsp;  {{$empresas->direccion}} </dd>
                        </div>
                    </div>
                <dt><u>Datos Servicio Impuestos Internos</u></dt>
                <div class="form-row ">
                    <div class="col-sm-4">
                         <dd >&nbsp;  Fecha inicio:&nbsp;  {{$empresas->fe_inicio}} </dd>
                    </div>
                    <div class="col-sm-4">
                         <dd > Tributacion:&nbsp;  {{$empresas->tipo_tri}} </dd>
                    </div>
                    <div class="col-sm-4">
                         <dd >Segmento:&nbsp;{{$empresas->segmento}} </dd>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="col-sm-12">
                         <dd > Giro:{{$empresas->codigo}}&nbsp;&nbsp;{{$empresas->giro}} </dd>
                    </div>
                </div>

                <dt><u>Datos Cta. Cte. Bancarias</u></dt>
                <dt><u>Datos Constitucion social</u></dt>

                <dt><u>Datos de Socios</u></dt>
                <div class="form-row ">
                    <div class="col-2"><u>Rut</u></div><div class="col-5"><u>Nombre Completo</u></div><div class="col-2"><u>Rep.Legal %</u></div>
                                    <div class="col-2"><u>APORTE TOTAL</u></div>
                </div>
                @foreach ($socios as $socio)
                <div class="form-row ">
                    <div class="col-2">{{$socio->rut}}</div><div class="col-5">{{$socio->name}}</div><div class="col-2">{{$socio->rep_legal}}&nbsp;&nbsp;{{$socio->porcen}}</div>
                                    <div class="col-2">{{$socio->aporte}}</div>
                </div>
                @endforeach

                <dt><u>Datos de los Contactos</u></dt>
                <div class="form-row ">
                    <div class="col-5"><u>Nombre Completo</u></div><div class="col-2"><u>Fono</u></div> <div class="col-4"><u>Correo Electronico</u></div>
                  </div>
                    @foreach ($contactos as $contacto)
                    <div class="form-row ">
                        <div class="col-5">{{$contacto->name}}</div><div class="col-2">{{$contacto->fono}}</div> <div class="col-5">{{$contacto->email}}</div>
                    </div>
                    @endforeach
                </div>
                 <dd><u>Datos de los Bancos</u> </dd>
            <div class="modal-footer">
                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-outline-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-file-pdf"></i>   PDF
                    {{--{{$pd=0}}--}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="dropdown-item" href="{{ route('pdfview',[$empresas->id,$pd='1'])}}">Descargar <i class="fas fa-download"></i></a>
                        <a class="dropdown-item" href="{{ route('pdfview',[$empresas->id,$pd='2'])}}">Pantalla <i class="fas fa-desktop"></i></a>
                    </div>
                </div>

                <a href="{{ route('listempresa') }}"
                   class="btn btn-outline-dark btn-sm"><i class="fa fa-undo"></i> Volver</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
$('#NoteModalLong').modal('show');
</script>--}}
@endsection

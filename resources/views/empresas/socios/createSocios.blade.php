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
            @include('empresas.socios.partials.createHeader')
         <div class="modal-body">
             <form class="form-horizontal" method="POST" action="{{ route('storesocios') }}">
                 {{ csrf_field() }}
            @include('empresas.socios.partials.sociosfields')
                 {{--Ultima linea de footer de botones  apopend+apopago--}}
                 <div class="modal-footer">
                     {{--<div class="col-sm-5">--}}
                         {{--<div class="input-group">--}}
                             {{--<div class="input-group-text">Total $ </div>--}}
                             {{--<input id="aporte" type="number" class="form-control text-right"--}}
                                    {{--name=aporte"  disabled="true" value="{{ old('aporte',$socios->aporte) }}">--}}
                          {{--</div>--}}
                    {{--</div>--}}
                     @include('empresas.socios.partials.NewButton')
                 </div>


             </form>

        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(sumar());
$('#NoteModalLong').modal('show');

// Sumar aportes pagados y pendientes y mostrar total
function sumar() {
    var n1 = document.getElementById('apopago').value;
    var n2 = document.getElementById('apopend').value;
    var total = parseInt(n1) + parseInt(n2);
    document.getElementById('aporte').value=total;
}

// https://gist.github.com/rotvulpix/69a24cc199a4253d058c
function checkRut(rut) {
    // Despejar Puntos
    var valor = rut.value.replace('.','');
    // Despejar Guión
    valor = valor.replace('-','');
    // Aislar Cuerpo y Dígito Verificador
    cuerpo = valor.slice(0,-1);
    dv = valor.slice(-1).toUpperCase();
    // Formatear RUN
    rut.value = cuerpo + '-'+ dv
    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
    // Calcular Dígito Verificador
    suma = 0;
    multiplo = 2;
    // Para cada dígito del Cuerpo
    for(i=1;i<=cuerpo.length;i++) {
        // Obtener su Producto con el Múltiplo Correspondiente
        index = multiplo * valor.charAt(cuerpo.length - i);
        // Sumar al Contador General
        suma = suma + index;
        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
    }
    // Calcular Dígito Verificador en base al Módulo 11
    dvEsperado = 11 - (suma % 11);
    // Casos Especiales (0 y K)
    dv = (dv == 'K')?10:dv;
    dv = (dv == 0)?11:dv;
    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
    // Si todo sale bien, eliminar errores (decretar que es válido)
    rut.setCustomValidity('');
    }
</script>
@endsection

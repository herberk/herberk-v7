@extends('layouts.app')
@section('title',"Editar Empresas")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_empresas')
@endsection
@section('content')
   <div class="container">
        <div class="card  mx-auto mt-sm-0">
            @if (Session::has('message'))
                <div class="card-header"> <i class="fas fa-building" style=color:#e4c40a></i><strong>  La Empresas fue editada</strong>
            @else
                 <div class="card-header"> <i class="fas fa-building" style=color:#e4c40a></i></strong> Edita Empresas</strong>
            @endif
       </div>
       <div class="card-body">
           {!! Form::model($empresas, ['route' => ['empresa/update', $empresas], 'method' => 'PUT','class'=>"form-horizontal"]) !!}
            @include('empresas.partials.fields')
            {{--Ultima linea de botones--}}
            @include('empresas.partials.editboton')
            <!-- Modal -->
            @include('empresas.partials.NoteModal')
             {!! Form::close() !!}
        </div>
     </div>
   </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $("#giro").easyAutocomplete({
                url: "/autocomplete/giros",
                getValue: "name",
                template: {
                    type: "description",
                    fields: {
                        description: "codigo"
                    }
                },

                list: {
                    match: {
                        enabled: true
                    },

                    onSelectItemEvent: function() {
                        var giro = $("#giro").getSelectedItemData();
                        $('#codigo').val(giro.codigo);
                    },

                },
                theme: "bootstrap",
                ajaxSettings: {
                    dataType: "json",
                    method: "GET",
                    data: {
                    }
                },

             /* preparePostData: function(data) {
                    data.term = $("#user").val();
                    return data;
                },*/

                requestDelay: 500
            }).change(function () {
                $('#codigo').val('');
            });
        });

        // Maneja tabla con datos de bancos
        $(document).on('click', '.borrar', function (event) {
            event.preventDefault();
            $(this).closest('tr').remove();
        });

        function additem(e) {
            e.preventDefault();
            const row = createRow({
                namebco: $('#namebco').val(),
                ctacte: $('#ctacte').val(),
                firman: $('#firman').val(),
                montolinea: $('#montolinea').val()
            });
            $('table tbody').append(row);
            clean();
        }

        function createRow(data) {
            return (
                `<tr>` +
                // `<td>${$('tbody tr').length + 1}</td>` +
                `<td><input name=namebco[] style="width: 100%"></td>` +
                `<td><input name=ctacte[] style="width: 100%"></td>` +
                `<td><input name=firman[] style="width: 100%"></td>` +
                `<td><input name=montolinea[] style="width: 100%"></td>` +
                `<td class="borrar"><i class="fas fa-trash fa-sm" style=color:Tomato></i></td>`+
                `</tr>`

            );
            name.push();
        }
        function clean() {
            $('#namebco').val('');
            $('#ctacte').val('');
            $('#firman').val('');
            $('#montolinea').val('');
            $('#name').focus();
        }
      //Datepicker
        $('.datepicker').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
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
@extends('layouts.app')
@section('title',"Lista de Regiones Comunas")
@section('style')
{{--<style>
*:before,
*:after {
box-sizing: border-box;
margin: 0;
padding: 0;
}
body {
padding: 1rem;
text-align: center;
}
form {
display: inline-flex;
}
form input {
border: 1px solid #ccc;
color: #333;
font-family: 'segoe ui';
font-size: 14px;
outline: none;
padding: .4rem .8rem;
}
form button {
background-color: #1abc9c;
border: 1px solid #1abc9c;
color: rgba(255,255,255,.93);
font-family: 'segoe ui';
margin-left: 10px;
padding: .4rem 1rem;
transition: background-color .2s ease,
color .2s ease;
}
form button:hover {
background-color: #ffF;
color: #1abc9c;
}
table {
border-collapse: collapse;
border: 1px solid #ccc;
margin-top: 25px;
}
table thead th {
background-color: #f2f2f2;
font-weight: 500;
}
table thead th,
table tbody td {
color: #333;
font-family: 'segoe ui';
font-size: 14px;
padding: .5rem .65rem;
}
table thead th:not(:last-of-type),
table tbody td:not(:last-of-type) {
border-right: 1px solid #ccc;
}
table thead tr,
table tbody tr:not(:last-of-type) {
border-bottom: 1px solid #ccc;
}
</style>--}}
@endsection

@section('content')
    <div class="col-12">
        <div class="card card">
            <div class="card-header">
                <div class="clearfix">
                    <div class="Display4 float-left"><i class="fas fa-fw fa-table" style=color:#3729fa></i> Regiones y Comunas</div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message')}}</p>
                    @endif
                </div>
            </div>
      {{--{!! Form::model($makeForm, ['method' => 'GET', 'class' => 'form', 'id' => 'search']) !!}--}}
            <div class="form-row">
                <div class="col-sm-4">
                     {!! Field::select('region_id', $reg_com, null) !!}
                </div>
                <div class="col-sm-4">
                    {!! Field::select('comuna_id',$com_com, null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Field::select('ciudad_id',$ciu_com, null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-4">
                    {!! Field::select('tipo_id', $tipo_com, null) !!}
                </div>
                <div class="col-sm-4">
                    {!! Field::select('atributo_id',$atri_com, null, ['class' => 'form-control']) !!}
                </div>

            </div>
        </div>
    </div>
{{--termina regiones y comuna --}}
{{--Otra tabla con estilo--}}
            <div class="card">
                <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    <strong> Informacion sobre Bancos</strong>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <!-- Primera Linea del acordeon Two-->
                    <div class="form-row">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
                                <thead>
                                <tr>
                                    {{--<th>#</th>--}}
                                    <th>Nombre del Banco</th>
                                    <th>Cuenta Corriente</th>
                                    <th>Apoderados Firma</th>
                                    <th>Linea Credito</th>
                                    <th>#</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- segunda Linea del acordeon Two-->
                    {{--<form onsubmit="additem(event)">--}}
                    <div class="form-row">

                        <div class="col-3">

                                <input class="form-control" type="text" id="name" placeholder="Nombre del Banco" required />

                        </div>
                            <div class="col-sm-3">

                                    <input class="form-control" type="text" id="ctacte" placeholder="Nro. Cta. Cte" />

                            </div>

                            <div class="col-sm-3">

                                    <input class="form-control" type="text" id="firman" placeholder="Personas que Firman" />

                            </div>
                            <div class="col-sm-3">

                                    <input class="form-control" type="text" id="montolinea" placeholder="Monto linea Cr." >

                                {{--<button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Agrega</button>--}}
                            </div>

                    </div>
                    {{--</form>--}}
                    <a onclick="additem(event)" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Agrega</a>
                    {{--<button onclick="additem(event)" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Agrega</button>--}}
                </div> {{-- fin de colapse two--}}
            </div>




           {{-- <form onsubmit="additem(event)">
                <section class="group">
                    <input class="form-control" type="text" id="name" placeholder="Nombre del Banco" />
                    <input type="text" id="ctacte" placeholder="Nro. Cta. Cte" />
                    <input type="text" id="firman" placeholder="Personas que Firman" />
                    <input type="text" id="montolinea" placeholder="Monto linea Cr." />
                </section>
                <button type="submit" class="btn btn-outline-success btn-sm"><i class="fa fa-save"></i> Agrega</button>
            </form>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection

@section('script')

    <script type="text/javascript">
  // Tabla -agrga elimina lineas y valores
  $(document).on('click', '.borrar', function (event) {
      event.preventDefault();
      $(this).closest('tr').remove();
  });

    function additem(e) {
        e.preventDefault();
        const row = createRow({
            name: $('#name').val(),
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
            `<td>${data.name}</td>` +
            `<td>${data.ctacte}</td>` +
            `<td>${data.firman}</td>` +
            `<td>${data.montolinea}</td>` +
            `<td class="borrar"><i class="fas fa-trash fa-sm" style=color:Tomato></i></td>`+
           `</tr>`
        );
    }
      function clean() {
        $('#name').val('');
        $('#ctacte').val('');
        $('#firman').val('');
        $('#montolinea').val('');
        $('#name').focus();
    }
        // codigo de recarga  los select de regiones comunas
        $(document).ready(function () {
            $('select').select2({
                allowClear: true,
                placeholder: {
                    id: "",
                    text: 'Selecione valor'
                }
            });
            $.fn.populateSelect = function (values) {
                var options = '';
                $.each(values, function (key, row) {
                    options += '<option value="' + row.value + '">' + row.text + '</option>';
                });
                $(this).html(options);
            }
            $('#region_id').change(function () {
                $('#comuna_id').empty().change();
                var region_id = $(this).val();
                if (region_id == '') {
                    $('#comuna_id').empty().change();
                } else {
                    $.getJSON('comunas/'+region_id, null, function (values) {
                        $('#comuna_id').populateSelect(values);
                    });
                }
            });
            $('#tipo_id').change(function () {
                $('#atributo_id').empty().change();
                var tipo_id = $(this).val();
                if (tipo_id == '') {
                    $('#atributo_id').empty().change();
                } else {
                    $.getJSON('atributos/'+tipo_id, null, function (values) {
                        $('#atributo_id').populateSelect(values);
                    });
                }
            });
        });
    </script>

@endsection

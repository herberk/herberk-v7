


<!-- Primera Linea -->
<div class="form-row ">
    <div class="col-2"></div>
    <div class="col-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('rut') ? ' has-error' : '' }}">
                <div class="input-group-text">Rut</div>
            </div>
            <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                            placeholder="Sin: .  - " value="{{ old('rut',$empresas->rut) }}">
            @if ($errors->has('rut'))
                <span class="form-text text-danger">{{ $errors->first('rut') }}</span>
            @endif
        </div>
    </div>

    <div class="col-sm-7">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-group-text">Nombre</div>
            </div>
            <input type="text" class="form-control" placeholder="Nombre completo o razon social"
                            name="name" value="{{ old('name',$empresas->name) }}" required>
           </div>
        @if ($errors->has('name'))
            <span class="form-text text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<!-- Segunda Linea -->
<div class="form-row ">
    <div class="col-2"></div>

    <div class="col-sm-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('name_corto') ? ' has-error' : '' }}">
                <div class="input-group-text">Nombre corto</div>
            </div>
            <input id="name_corto" type="text" class="form-control" name="name_corto" placeholder="Max. 10 Carac."
                   value="{{ old('name_corto',$empresas->name_corto) }}" required>
            @if ($errors->has('name_corto'))
                <span class="form-text text-danger">{{ $errors->first('name_corto') }}</span>
            @endif
        </div>
     </div>
    <div class="col-7 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Tipo empresa</div>
            </div>
            {!! Form::select('arti_id', $art[5], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<!-- Tercera Linea -->
<div class="form-row ">
    <div class="col-2"></div>
     <div class="col-10 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Actividad empresarial</div>
            </div>
            <input id="actividad" type="text" class="form-control" name="actividad" placeholder="Descripcion corta segun la escritura"
                   value="{{ old('actividad',$empresas->actividad) }}" >
        </div>
    </div>
</div>

<!-- cuarta Linea -->
<div class="form-row ">
    <div class="col-3 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('caital') ? ' has-error' : '' }}">
                <div class="input-group-text">Capital $</div>
            </div>
            <input id="capital" type="text" class="form-control text-right"
                   name="capital" value="{{ old('capital',$empresas->capital) }}">
        </div>
        @if ($errors->has('capital'))
            <span class="form-text text-danger">{{ $errors->first('capital') }}</span>
        @endif
    </div>
    <div class="col-2 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('codpostal') ? ' has-error' : '' }}">
                <div class="input-group-text"><a href="http://www.correos.cl/SitePages/home.aspx" target="_blank">Zip</a></div>
            </div>
            <input id="codpostal" type="text" class="form-control text-right"
                   name="codpostal" value="{{ old('codpostal',$empresas->codpostal) }}">
            @if ($errors->has('codpostal'))
                <span class="form-text text-danger">{{ $errors->first('codpostal') }}</span>
            @endif
        </div>
    </div>
    <div class="col-6 my-0">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group-text">@</div>
            </div>
            <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                    name="email" value="{{ old('email',$empresas->email) }}" required>

                  @if ($errors->has('email'))
                    <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                 @endif

        </div>
    </div>
</div>
<!-- quinta Linea -->
<div class="form-row ">
    <div class="col-4">
        {!! Field::select('region_id', $reg_com, null) !!}
    </div>
    <div class="col-4">
       {!! Field::select('comuna_id',$com_com, null) !!}
    </div>
    <div class="col-4">
        {!! Field::select('ciudad_id',$ciu_com, null) !!}
    </div>
</div>

<!-- sexta Linea -->
<div class="form-row ">
    <div class="col-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Domicilio</div>
            </div>
            <input id="direccion" type="text" class="form-control" name="direccion" value="{{old('direccion',$empresas->direccion)}}" >
        </div>
    </div>
    <div class="col-4">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Fonos</div>
            </div>
            <input id="fono" type="text" class="form-control" name="fono" value="
            {{ old('fono',isset($empresas->fono) ? $empresas->fono : null) }}" >
        </div>
    </div>

</div>

{{--septima linea--}}
<div class="form-row ">
        <div class="col-sm-9">
            {!! Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro SII']) !!}
        </div>
        <div class="col-sm-3">
            {!! Field::text('codigo',['id' => 'codigo','label'=>'Codigo Giro SII','readonly']) !!}
        </div>

 </div>
{{--Acordeon--}}
<div id="accordion">
    <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong> Datos del SII</strong>
            </a>
         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
             <!-- Primera Linea del acordeon one-->
             <div class="form-row ">
                 <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Inicio SII&nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_inicio" value="{{ old('fe_inicio',$empresas->fe_inicio) }}">
                        </div>
                    </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tributacion</div>
                        </div>
                        {!! Form::select('tipo_tri',config('options.tipo_tri'),null, ['class'=>'form-control']) !!}

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Segmento SII&nbsp; <a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></i></a></div>
                        </div>
                        {!! Form::select('segmento',config('options.segmento'),null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                 <div class="col-2 my-0">
                     <div class="input-group mb-1">
                         <div class="input-group-prepend">
                             <div class="input-group-text"><a href= "biblio/sii/segmento.pdf" target="_blank"><i class="fas fa-info-circle"></a></i>DISPONIBLE</div>
                         </div>
                     </div>
                 </div>
            </div> {{-- fin de form-row--}}
             <!-- Segunda Linea del acordeon one-->
            <div class="form-row">
                {{--<div class="col-sm-9">
                    {!! Field::text('giro', ['class' => 'easy-autocomplete','label'=>'Actividad o Giro SII']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Field::text('giro_codigo',['id' => 'giro_codigo','label'=>'Codigo Giro SII']) !!}
                </div>--}}
             </div>  {{-- fin de form-row --}}
         </div>  {{-- fin de colapse one --}}

        <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                <strong> Informacion sobre constitucion social</strong>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <!-- Primera Linea del acordeon Two-->
               <div class="form-row">
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Notario</div>
                                <input id="notario" type="text" class="form-control" name="notario" value="{{ old('notario',$empresas->notario) }}" >
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Escritora &nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_notario" value="{{ old('fe_notario',$empresas->fe_notario) }}">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Repertorio</div>
                                <input id="repertorio" type="text" class="form-control" name="repertorio" value="{{ old('repertorio',$empresas->repertorio) }}" >
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Diario Of.&nbsp;<i class="far fa-calendar-alt"></i></div>
                            </div>
                            <input type="text" class="form-control datepicker" name="fe_diario" value="{{ old('fe_diario',$empresas->fe_diario) }}">
                        </div>
                    </div>
                </div>
                <!-- segunda Linea del acordeon Two-->
                <div class="form-row">
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Reg. Comercioo</div>
                                <input id="reg_comercio" type="text" class="form-control" name="reg_comercio" value="{{ old('reg_comercio',$empresas->reg_comercio) }}" >
                            </div>
                        </div>
                    </div>
                </div>
            </div> {{-- fin de colapse two--}}
        </div>
        <div class="card">
            <a class="btn btn-outline-secondary btn-sm btn-block" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                <strong> Informacion sobre Bancos</strong>
            </a>
            <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <!-- Primera Linea del acordeon Two-->
                <div class="form-row">
                    <div class="col-sm-12">
                        <table class="table table-sm table-bordered table-striped" id="Table" name=Table" width="100%" style="font-size: 12px">
                            <thead>
                            <tr>
                                <th>Nombre del Banco</th>
                                <th>Cuenta Corriente</th>
                                <th>Apoderados Firma</th>
                                <th>Linea Credito</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input name=namebco[] style="width: 100%"></td>
                                    <td><input name=ctacte[] style="width: 100%"></td>
                                    <td><input name=firman[] style="width: 100%"></td>
                                    <td><input name=montolinea[] style="width: 100%"></td>
                                    <td class="borrar"><i class="fas fa-trash fa-sm" style=color:Tomato></i></td>
                                 </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- segunda Linea del acordeon Two-->
                   <div class="form-row">
                           <div class="container">
                           <div class="row">
                               <div class="col-sm">

                               </div>
                               <div class="col-sm">
                                   <button onclick="additem(event)" class="btn btn-success btn-sm btn-block"><i class="fa fa-save"></i> Agrega otra linea</button>
                                   <br>
                               </div>
                               <div class="col-sm">

                               </div>
                           </div>
                       </div>
                   </div>
            </div> {{-- fin de colapse two--}}
        </div>

    </div>
 </div>

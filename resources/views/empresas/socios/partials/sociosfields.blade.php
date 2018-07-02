<div class="form-row ">
    <div class="col-3">
        <select  class="custom-select" name="empresa_id" >
            @foreach ($empresas as $empresa)
                <option value={{ $empresa->id}}> {{ $empresa->name_corto}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('rut') ? ' has-error' : '' }}">
                <div class="input-group-text">Rut</div>
            </div>
            <input type="text" class="form-control" id="rut" name="rut" required oninput="checkRut(this)"
                   placeholder="Sin: .  - " value="{{ old('rut',$socios->rut) }}">
            @if ($errors->has('rut'))
                <span class="form-text text-danger">{{ $errors->first('rut') }}</span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-group-text">Nombre</div>
            </div>
            <input type="text" class="form-control" placeholder="Nombre completo del socio"
                   name="name" value="{{ old('name',$socios->name) }}" required>
        </div>
        @if ($errors->has('name'))
            <span class="form-text text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div>
</div>
<div class="form-row ">
       <div class="col-sm-6">
        <div class="input-group">
            <div class="input-group-prepend{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-group-text">@</div>
            </div>
            <input id="email" type="email" class="form-control" placeholder="Correo electronica"
                   name="email" value="{{ old('email',$socios->email) }}" required>
            @if ($errors->has('email'))
                <span class="form-text text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <div class="input-group-text">Fonos</div>
            </div>
            <input id="fono" type="text" class="form-control" name="fono" value="
                     {{ old('fono',isset($socios->fono) ? $socios->fono : null) }}" >
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col-sm-2">
      <div class="input-group">
        <div class="input-group-prepend{{ $errors->has('rep_legal') ? ' has-error' : '' }}">
            <div class="input-group-text">Rep.</div>
        </div>
            <select class="custom-select" id="rep_legal" name="rep_legal">
                <option>SI</option>
                <option>No</option>
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend{{ $errors->has('apopago') ? ' has-error' : '' }}">
                <div class="input-group-text">Pago $</div>
            </div>
            <input id="apopago" type="text" onchange="sumar();" class="form-control text-right"
                   name="apopago" value="{{ old('apopago',$socios->apopago)}}">
        </div>
        @if ($errors->has('apopago'))
            <span class="form-text text-danger">{{ $errors->first('apopago') }}</span>
        @endif
    </div>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-prepend{{ $errors->has('apopend') ? ' has-error' : '' }}">
                <div class="input-group-text">Peniente $</div>
            </div>
            <input id="apopend" type="text" onchange="sumar();" class="form-control text-right"
                   name="apopend" value="{{ old('apopend',$socios->apopend) }}">
             </div>
             @if ($errors->has('apopend'))
                 <span class="form-text text-danger">{{ $errors->first('apopend') }}</span>
             @endif
    </div>
    <div class="col-sm-2">
        <div class="input-group">
            <div class="input-group-prepend{{ $errors->has('porcen') ? ' has-error' : '' }}">
                <div class="input-group-text">%.</div>
            </div>
            <input id="porcen" type="text" class="form-control text-right"
                   name="porcen" value="{{ old('porcen',$socios->porcen) }}">
        </div>
        @if ($errors->has('porcen'))
            <span class="form-text text-danger">{{ $errors->first('porcen') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="col-sm-3">
        <div class="input-group">
            <div class="input-group-text">Total $ </div>
            <input id="aporte" type="text" class="form-control text-right"
                   name="aporte" value="{{ old('aporte',$socios->aporte) }}">
        </div>

    </div>
</div>

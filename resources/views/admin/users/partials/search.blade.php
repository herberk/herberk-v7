    {!! Form::model(Request::all(),['route'=> 'users.index', 'method'=>'GET','class' =>'form-inline','role' =>'search'])!!}
       <div class="form-group">
         {!! Form::text('name',null, ['class'=>'form-control form-control-sm','placeholder'=>'Nombre de usuario']) !!}
         {!! Form::select('type',config('options.types'),null, ['class'=>'form-control form-control-sm']) !!}
       </div>
         <button type="submit" class="btn btn-outline-success btn-sm"><i class="fas fa-search"></i> Buscar</button>
    {!!Form::close()!!}
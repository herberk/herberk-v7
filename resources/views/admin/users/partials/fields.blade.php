<div class="row">
    <div class="container col-md-8 col-md-offset-2">

             {!! Field::text('name') !!}
             {!! Field::text('username') !!}
             {!! Field::email('email') !!}
             {!! Field::password('password') !!}
             {!! Field::password('password_confirmation') !!}
             {!! Form::label('type', 'Tipo de usuario') !!}
             {!! Form::select('type',config('options.types'), null, ['class' => 'form-control']) !!}


        
    </div>
</div>
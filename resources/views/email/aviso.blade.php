
@extends('landing.app')
@section('title',"Aviso")
@section('content')
    <div class="container">
        <div class="row">
            <div class="card" style="width: 25rem;">
                <div class="card-header">
                    <h3 class="card-title">Atencion  !!!</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-subtitle mb-2 text-muted">Tu mensaje ha sido enviado</h5>
                    <p class="card-text">Responderemos tu correo a la brevedad.</p>
                    <a href="/" class="card-link"> Volver </a>
                </div>
            </div>
        </div>
    </div>

@endsection

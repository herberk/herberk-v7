@extends('layouts.app')
@section('title',"DropBox")
@section('content')
<div class="container">
    <div class="col-md-12">

            <div class="card card">
                <div class="card-header">Archivos en Dropbox</div>
                <div class="card-body">
                 <table class="table table-sm table-bordered" width="100%" style="font-size: 12px">
         {{--     <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">--}}
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Tamaño</th>
                            <th>Extensión</th>
                            <th style="width: 120px;">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->name }}</td>
                                <td>{{ $file->sizeInKb }} KB</td>
                                <td>{{ $file->extension }}</td>
                                <td>
                                    <a href="{{ $file->public_url }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="{{ route('files.download', $file) }}" class="btn btn-secondary btn-sm">
                                        <i class="fas fa-download"></i></a>
                                    <form action="{{ route('files.destroy', $file) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-light btn-sm"><i class="fas fa-trash" style=color:Tomato></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Subir nuevo archivo</div>
                <div class="card-body">
                    <form action="{{ route('files.store') }}" class="form-inline" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control mr-4" required>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i>  Subir Archivo</button>
                    </form>
                </div>
            </div>
        </div>

</div>
@endsection

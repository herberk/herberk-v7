{{--<div v-if="!empresas.length">No hay Empresas </div>--}}
<table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">

   <tr>
    <th>#</th>
    <th style="width: 100px;">RUT</th>
    <th style="width: 100px;">Nombre corto</th>
    <th style="width: 300px;">Nombre</th>
    <th>Email</th>
     <th style="width: 90px;">Tributacion</th>
     <th style="width: 90px;">Fecha inicio</th>
     <th style= "width: 30px;">Notas</th>
     <th style= "width: 30px;">Ver</th>
     <th style= "width: 30px;">Editar</th>
     <th style= "width: 30px;">Eliminar</th>
  </tr>
    @foreach ($empresas as $empresa)
     <tr data-id="{{ $empresa->id}}">
       <td>{{ $empresa->id}}</td>
       <td>{{ $empresa->rut}}</td>
       <td>{{ $empresa->name_corto}}</td>
       <td>{{ $empresa->name}}</td>
       <td>{{ $empresa->email}}</td>
       <td>{{ $empresa->tipo_tri}}</td>
       <td>{{ \Carbon\Carbon::parse($empresa->fe_inicio)->format('d-m-y') }}</td>
       <td class="text-center"> <a href="{{ route('empresashownotas', [$empresa->id]) }}">
               <i class="fas fa-tasks" style=color:#3729fa></i></a></td>
       <td class="text-center"> <a href="{{route('empresashow',$empresa)}}">
            <i class="fa fa-eye" aria-hidden="true"></i></a> </td>
       <td class="text-center"> <a href="{{route('empresaedit',$empresa)}}">
              <i class="fas fa-pencil-alt" style=color:#15be0e></i> </a></td>
      <td class="text-center"> <a href="{{ route('empresa/delete', [$empresa->id]) }}">
              <i class="fas fa-trash fa-sm" style=color:Tomato></i></a></td>
     </tr>
    @endforeach
</table>

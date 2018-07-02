{{--<div v-if="!empresas.length">No hay Empresas </div>--}}

<table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
   <tr>
       <th>#</th>
       <th style="width: 100px;">RUT</th>
       <th style="width: 300px;">Nombre</th>
       <th>Empresa</th>
       <th style="width: 40px;">Rep.</th>
       <th style= "width: 30px;">%</th>
       <th style= "width: 90px; text-align: center">Pagado</th>
       <th style= "width: 90px; text-align: center">Pendiente</th>
       <th style= "width: 90px; text-align: center" >Aporte</th>
       <th style= "width: 30px;">Notas</th>
       <th style= "width: 30px;">Editar</th>
       <th style= "width: 30px;">Eliminar</th>
  </tr>
    @foreach ($socios as $socio)
     <tr data-id="{{ $socio->id}}">
       <td>{{ $socio->id}}</td>
       <td>{{ $socio->rut}}</td>
       <td>{{ $socio->name}}</td>
       <td>{{ $socio->empresas->name_corto}}</td>
       <td>{{ $socio->rep_legal}}</td>
       <td>{{ $socio->porcen}}</td>
       <td style="text-align: right">{{ $socio->apopago}}</td>
       <td style="text-align: right">{{ $socio->apopend}}</td>
       <td style="text-align: right">{{ $socio->aporte}}</td>
       <td class="text-center"> <a href="{{ route('socioshownotas', [$socio->id]) }}">
               <i class="fas fa-tasks" style=color:#3729fa></i></a></td>
       <td class="text-center"> <a href="{{route('socioedit',$socio)}}">
              <i class="fas fa-pencil-alt" style=color:#15be0e></i> </a></td>
      <td class="text-center"> <a href="{{ route('socio/delete', [$socio->id]) }}">
              <i class="fas fa-trash fa-sm" style=color:Tomato></i></a></td>
     </tr>
    @endforeach
</table>

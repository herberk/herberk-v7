
     <table class="table table-sm table-bordered table-striped" id="dataTable" width="100%" style="font-size: 12px">
		     <tr>
		    <th>#</th>
            <th>Nombre corto</th>
		    <th style="width: 300px;">Nombre</th>
		    <th>Email</th>
             <th>Fecha</th>
             <th>Act.</th>
		     <th>Tipo</th>
              <th>#</th>
		  </tr>
           @foreach ($users as $user)
          <tr data-id="{{ $user->id}}">
               <td>{{ $user->id}}</td>
               <td>{{ $user->nickname}}</td>
               <td>{{ $user->name}}</td>
               <td>{{ $user->email}}</td>
               <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-m-y') }}</td>
               <td>{{ ($user->active)?'Si':'No'}}</td>
               <td>{{ $user->type}}</td>
               <td class="text-center">
                 <a href="{{ route('users/delete', [$user->id]) }}">
                      <i class="fas fa-trash fa-sm" style=color:Tomato></i></a>
               </td>
          </tr>
          @endforeach
     </table>

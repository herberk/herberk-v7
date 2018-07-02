{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE']) !!}
   		<button type="submit" onclick="return confirm('seguro que desa eliminar')" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar </--button>
{!! Form::close() !!}
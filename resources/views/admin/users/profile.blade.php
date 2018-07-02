@extends('layouts.app')
@section('title',"Editar perfil")
@section('sidebar')
    @parent
    @include('layouts.Menus.Sidebar_user')
@endsection

@section('content')
<div class="container">
    <div class="card  mx-auto mt-sm-1">
        <div class="card-header"><i class="fas fa-user fa-fw" style=color:#15be0e></i>  Editar Perfil usuario</div>
             <div class="card-body">
                  <form class="form-horizontal"
                                  role="form"
                                  method="POST"
                                  action="{{ url('profile') }}"
                                  enctype="multipart/form-data">
                               {{ method_field('PUT')}}
                                {{ csrf_field() }}

                   <!--Avatar -->




          <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
               <div class="form-row">
                   <div class="col-md-6">
                       <div class="form-row">
                          <div class="col-md-3">
                                @if($profile->avatar)

                                   <a href="#">

                                   <img src="{{ url('profile/avatar') }}"alt="Foto" class="img-fluid img-thumbnail">
                                   </a>
                                @endif
                           </div>

                          <div class="col-md-7">
                            <input id="avatar" type="file"  name="avatar"  v-on:change="onFileChange" class="form-control">
                              @if ($errors->has('avatar'))
                                   <span class="form-text text-danger">{{ $errors->first('avatar') }}</span>
                               @endif
                        </div>
                    </div>
                </div>
                   <!--  Notas del Usuario -->
                 <div class="col-md-6 {{ $errors->has('description') ? ' has-error' : '' }}">
                      <label for="description" class="col-md-5 control-label">Notas del usuario</label>
                      <textarea id="description" name="description" class="form-control">{{old("description", $profile->description)}}</textarea>
                       @if ($errors->has('description'))
                              <span class="form-text text-danger">{{ $errors->first('description') }} </span>
                     @endif
                 </div>
          </div>
       </div>
        <!-- name y nickname -->
       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
           <div class="form-row">
               <div class="col-md-6">
                   <label for="name">Nombre Completo</label>
                   <input class="form-control" id="name" type="text"  placeholder="Ingrese Nombre Completo" name="name" value="{{ old('name',$user->name) }}" required autofocus>
                   @if ($errors->has('name'))
                       <span class="form-text text-danger">{{ $errors->first('name') }}</span>
                   @endif
               </div>
               <div class="col-md-6{{ $errors->has('nickname') ? ' has-error' : '' }}">
                   <label for="Nickname">Nombre corto</label>
                   <input class="form-control" id="nickname" type="text"  placeholder="Nickname" name="nickname" value="{{ old('nickname',$user->nickname) }}" required>
                   @if ($errors->has('nickname'))
                       <span class="form-text text-danger">{{ $errors->first('nickname') }}</span>
                   @endif
               </div>
           </div>
       </div>
        {{--Email y tipo de Usuario--}}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="form-row">
                <div class="col-md-6">
                    <label for="Email">Correo Email</label>
                    <input class="form-control" id="email" type="email"  placeholder="Ingrese email" name="email" value="{{ old('email', $user->email) }}" required>
                    @if ($errors->has('email'))
                        <span class="form-text text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="col-md-6 {{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="tipo" class="col-md-5">Seleccionar Tipo</label>
                    {!! Form::select('type',config('options.types'),null, ['class'=>'form-control','name'=>'type','value'=>"{{old('type',$user->type)}}"]) !!}
                    @if ($errors->has('type'))
                        <span class="form-text text-danger">{{ $errors->first('type') }} </span>
                    @endif
                </div>
            </div>
        </div>
  <!-- Usuario Bloqueado -->
     <div class="form-group">
         <div class="form-row">
            <div class="col-md-6 {{ $errors->has('opciones') ? ' has-error' : '' }}">
              <label for="sw-bloqueado" class="col-md-5 control-label">Usuario Bloqueado?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="opciones" value="{{old("active", $user->active)}}">
                    <label class="form-check-label" for="inlineRadio1">Si</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="opciones"  value="{{old("active", $user->active)}}">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
                @if ($errors->has('opciones'))
                    <span class="form-text text-danger">{{ $errors->first('opciones') }} </span>
                @endif
            </div>
         </div>
     </div>

{{--

                                <div class="form-group">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                             <label for="sw-bloqueado" class="col-md-4 control-label">Usuario Bloqueado</label>
                                             <div class="radio-inline">
                                             <label>
                                                 <input type="radio" name="opciones" value=" {{old("active", $user->active)}}">Si
                                            </label>
                                            </div>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input checked="checked" type="radio" name="opciones"  value=" {{old("active", $user->active)}}">No
                                                    </label>
                                                </div>
                                            </div>


                                </div>
                            </div>


--}}

            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Actualizar perfil</button>
            </div>
         </form>
         </div>
    </div>
</div>
@endsection
@section('script')
<script>
    export default{

        data(){
            return {
                image: ''
            }
        },
        methods: {
            onFileChange(e) {
                alert('hola');
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            upload(){
                axios.post('/api/upload',{image: this.image}).then(response => {

                });
            }
        }
    }
</script>
 @endsection
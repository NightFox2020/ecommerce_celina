@extends('frontend.main_master')
@section('content')


<link rel="stylesheet" href="{{ asset('frontend/assets/css/style_btn.css') }}">

<div class="body-content">
  <div class="container">

    <div class="row">
      <div class="col-md-2"><br>
        <a href="javascript:history.back()"> <div class="btn-xs btn-block btn_atras_1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8.354 1.646a.5.5 0 0 1 0 .708L2.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M12.354 1.646a.5.5 0 0 1 0 .708L6.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
          </svg>Atrás</div></a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-2"> <br>
          <!-- <div class="img_perfil">
          <img class="card-img-top" style="border-radius: 100%;" src="{{ ( !empty($user->profile_photo_path) )? url('upload/user_images/'.$user->profile_photo_path):url('upload/perfil2.jpg') }}" height="100%" width="100%">
        </div> -->


        <ul class="list-group list-group-flush">

          <div class="titulo_1"><i class="icon fa fa-user"></i> Mi cuenta</div>

          <a href="{{ route('dashboard') }}"><div class="btn-sm btn-block">Mi Cuenta</div></a>
          <a href="{{ route('user.profile') }}"><div class="btn-sm btn-block">Editar Perfil</div></a>
          <a href="{{ route('change.password') }}"><div class="btn-sm btn-block">Cambiar Contraseña</div></a>
          <a href="{{ route('user.logout') }}"><div class="btn-sm btn-block">Cerrar Sesión</div></a>
        </ul>
      </div>


      <div class="col-md-2">

      </div> <!-- end col m 2 -->

      <div class="col-md-6">
        <div class="card">
          <h3 class="text-center">
            <span></span>
            <strong>Cambiar Contraseña</strong>
          </h3>
          <div class="card-body">
            <form method="post" action="{{ route('user.password.update') }}">
              @csrf


              <div class="form-group">
                <div>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong class="error_alert">
                      Error, porfavor verifique los datos.
                    </strong>
                  </span>
                  @enderror
                </div>
                <label class="info-title" for="exampleInputEmail1">Contraseña Actual<span></span></label>
                <input type="password" id="current_password" name="oldpassword" class="form-control">
              </div>

              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Nueva Contraseña<span></span></label>
                <input type="password" id="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Confirmar Nueva Contraseña<span></span></label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-danger">Actualizar Datos</button>
              </div>

            </form>
          </div>
        </div>

      </div> <!-- end col m 8 -->
    </div> <!-- end row -->
  </div>
</div>


@endsection

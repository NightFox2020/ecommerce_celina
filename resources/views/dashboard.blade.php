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

                    <a href="{{ route('dashboard') }}"><div class="btn-sm btn-block">Mi cuenta</div></a>
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
                        <span>¡Hola   </span>
                        <strong>{{ Auth::user()->name }}!</strong>
                        Bienvenido a Tienda Celina
                    </h3>
                </div>

            </div> <!-- end col m 8 -->
        </div> <!-- end row -->
    </div>
</div>


@endsection

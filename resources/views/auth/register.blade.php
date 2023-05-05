@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li class='active'>Registrarse</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">


<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Crear una nueva cuenta</h4>
	<!-- <p class="text title-tag-line">Create your new account.</p> -->

	<form method="POST" action="{{ route('register') }}">
            @csrf


        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Nombre <span>*</span></label>
		    <input type="text" id="name" name="name" class="form-control unicase-form-control text-input" >
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>
                    <!-- {{ $message }} -->
                    El campo de Nombre es requerido
                </strong>
            </span>
            @enderror
        </div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Correo <span>*</span></label>
	    	<input type="email" id="email" name="email" class="form-control unicase-form-control text-input">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>
                    <!-- {{ $message }} -->
                    El campo de Correo es requerido
                </strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Celular <span>*</span></label>
		    <input type="text" id="phone" name="phone" class="form-control unicase-form-control text-input">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>
                    <!-- {{ $message }} -->
                    El campo de Celular es requerido
                </strong>
            </span>
            @enderror
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Contraseña <span>*</span></label>
            <br> <small class="text-muted">La contraseña debe tener al menos ocho caracteres</small>
		    <input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>
                    <!-- {{ $message }} -->
                    El campo de Contraseña es requerido
                </strong>
            </span>
            @enderror
		</div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirmar Contraseña <span>*</span></label>
		    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input">
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>
                    <!-- {{ $message }} -->
                    El campo de Confirmar Contraseña es requerido
                </strong>
            </span>
            @enderror
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Registrarse</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->


@include('frontend.body.brands')



        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection


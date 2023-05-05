@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li class='active'>Restablecer Contraseña</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Restablecer Contraseña</h4>
	<!-- <p class="">Hello, Welcome to your account.</p> -->

    <form method="POST" action="{{ route('password.email') }}">
            @csrf

		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Correo <span>*</span></label>
		    <input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
		</div>
	  	
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Enviar link de restablecimiento</button>
	</form>					
</div>
<!-- Sign-in -->
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->


@include('frontend.body.brands')



        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection


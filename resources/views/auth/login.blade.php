@extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}">Inicio</a></li>
				<li class='active'>Iniciar Sesión</li>
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
					<h4 class="">Iniciar Sesión</h4>
					<!-- <p class="">Hello, Welcome to your account.</p> -->
					<!-- <div class="social-sign-in outer-top-xs">
					<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Iniciar Sesión con Facebook</a>
					<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Iniciar Sesión con Twitter</a>
				</div> -->

				<form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
					@csrf

					<div class="form-group">
						<div>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>
									<!-- {{ $message }} -->
									Correo o Contraseña incorrectos.
								</strong>
							</span>
							@enderror
						</div>
						<label class="info-title" for="exampleInputEmail1">Correo <span>*</span></label>
						<input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
					</div>

					<div class="form-group">
						<label class="info-title" for="exampleInputPassword1">Contraseña <span>*</span></label>
						<input type="password" id="password" name="password" class="form-control unicase-form-control text-input">
					</div>

					<div class="radio outer-xs">
						<label>
							<input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> Recordarme
						</label>
						<a href="{{ route('password.request') }}" class="forgot-password pull-right">Olvidó su Contraseña?</a>
					</div>
					<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Iniciar Sesión</button>
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

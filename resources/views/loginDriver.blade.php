@extends('layouts.app')
@section('content')
	<section class="container-fluid justify-center text-light" style="background-image:url({{ asset('images/bg-login-driver.jpg') }}); width:100vw; height:100vh; background-size:cover">
		<div class="container justify-center mt-5">
			<div class="workinghny-form-grid">
				<div class="main-hotair">
					<div class="col-md-5">
						<h2>Connexion au profil Chauffeur</h2>
						<form action="/login-driver/traitement" method="POST">
						@csrf    
						<div class="form-group mb-2">
							<span class="fa fa-user" aria-hidden="true"></span>
							<input type="text" class="form-control text" name="email" placeholder="email" required autocomplete="off">
						</div>
						<div class="form-group mb-2">
							<span class="fa fa-key" aria-hidden="true"></span>
							<input class="form-control text" type="password" class="password" name="password" placeholder="Mot de passe min 8 caractères" required autocomplete="off">
						</div>
						<div class="form-group mb-2">
							<label class="anim">
								<input type="checkbox" class="checkbox">
								<span> Se souvenir de moi ?</span> 
							</label>
							<br>
							<a href="#"> Mot de passe oublié?</a> 
							</ul>
							<div class="clear"> </div>
						</div>
						<div class="form-group mb-2">
							<button class="btn btn-warning text-light" type="submit">Se connecter</button>
						</div>
						</form>
						@if(session('message'))
							<div class="col-md-12 m-0">
								<div class="card">
									<a href="/login-driver" class="alert alert-danger justify-content"> {{ session('message') }} </a>
								</div>
							</div>
						@endif	
						<p class="account">N'êtes-vous pas encore un chaufeur ?<a href="/register-driver">S'inscrire</a></p>
				</div>
			</div>
		</div>
	</section>
@endsection
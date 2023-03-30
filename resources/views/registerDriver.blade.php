@extends('layouts.app')
@section('content')
<section class="container-fluid justify-center text-light" style="background-image:url({{ asset('images/bg-login-driver.jpg') }}); width:100vw; height:100vh; background-size:cover">
    <div class="container justify-center mt-5">
        <div class="workinghny-form-grid">
            <div class="main-hotair">
                <div class="col-md-5">
                    <h2>Créer un compte Chauffeur</h2>
                    <form action="/register-driver/traitement" method="POST" class="signin-form">
                    @csrf    
                    <div class="form-group mb-2">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" class="form-control text" name="nom" placeholder="Nom" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="text" name="prenom" placeholder="Prenom" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
							<span class="fa fa-car" aria-hidden="true"></span>
							<input placeholder="Marque de votre voiture" class="form-control text" name="marque" type="text" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
							<span class="fa fa-list-alt" aria-hidden="true"></span>
							<input placeholder="Plaque d'immatriculation" class="form-control text" name="plaque" type="text" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-user" aria-hidden="true"></span>
						<input type="text" class="form-control text" name="email" placeholder="Email" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="text" name="telephone" placeholder="Telephone" required autocomplete="off">
					</div>
					<div class="form-group mb-2">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input class="form-control text" type="password" name="password" placeholder="Mot de passe min 8 caractères" required autocomplete="off">
					</div>
					{{-- <div class="form-group mb-2">
						<label class="anim">
							<input type="checkbox" class="checkbox">
							<span> Se souvenir de moi ?</span> 
						</label>
						<br>
						<a href="#"> Mot de passe oublié?</a> 
						</ul>
						<div class="clear"> </div>
					</div> --}}
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="brand1" value="" required>
						<label for="brand1">
							<span></span>J'accepte les Termes & Conditions</label>
					</div>
					<div class="form-group mb-2">
						<button class="btn btn-warning text-light" type="submit">Enregistrer</button>
					</div>
                    </form>
                    @if(session('message'))
                        <div class="col-md-12 m-0">
                            <div class="card">
                                <a href="/register-driver" class="alert alert-success"> {{ session('message') }} </a>
                            </div>
                        </div>
                    @endif
                    <p class="account">Etes-vous déjà un chauffeur ? <a href="/login-driver">Se connecter</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
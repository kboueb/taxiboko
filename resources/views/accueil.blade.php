<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap5/css/bootstrap.css') }}">
      <!-- Template Main CSS File -->
  <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link href="images/logo.png" rel="icon">
    <link href="images/logo.png" rel="logo">

    <style>
      body {
        font-family: Arial, sans-serif;
        background: url(../images/clientbg.jpg);
        background-repeat: no-repeat;
        background-size: 55%;
        background-position: center right;
      }
      h1 {
        font-size: 36px;
        font-weight: bold;
        text-align: center;
      }
      p {
        font-size: 18px;
        text-align: center;
      }
      label {
        font-size: 16px;
        font-weight: bold;
        display: block;
        margin-bottom: 10px;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      button {
        background-color: #e8ce07;
        border: 2px solid #e8ce07;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
      }
      #map {
        height: 400px;
        width: 100%;
        margin-bottom: 20px;
      }
      a{color:#e8ce07;}
      .button-detail {
        background-color: #007bff; /* Couleur de fond du bouton */
        border: none; /* Supprimer la bordure */
        color: white; /* Couleur du texte */
        padding: 10px 20px; /* Ajouter de la marge intérieure */
        font-size: 22px; /* Taille de la police */
        border-radius: 5px; /* Ajouter des coins arrondis */
        display: inline-flex; /* Afficher le bouton en tant que bloc flex */
        align-items: center; /* Aligner les éléments sur l'axe vertical */
      }

      .button-icon {
        width: 20px; /* Largeur de l'icône */
        height: 20px; /* Hauteur de l'icône */
        margin-right: 10px; /* Ajouter de la marge à droite */
      }
      .link-bottom{
        position: fixed; /* Positionner le lien de manière fixe */
        bottom: 20px; /* Placer le lien à 20 pixels du bas de la page */
        right: 20px; /* Placer le lien à 20 pixels de la droite */
        font-size: 16px; /* Taille de la police */
        text-decoration: none; /* Supprimer la décoration de lien par défaut */
        cursor: pointer; /* Changer le curseur en pointeur au survol */

      }
    </style>
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top navbar-dark bg-dark">
      <div class="container d-flex align-items-center justify-content-lg-between">
  
        <h1 class="logo me-auto me-lg-0"><a href="/">Mba<span>ngo</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar order-last order-lg-0 ">
          <ul>
            <li><a class="nav-link scrollto" href="#about">A propos</a></li>
            <li class="dropdown"><a href="#passagers"><span>Passagers</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#cc">Comment ça marche</a></li>
                <li><a href="#prix">Nos prix & engagements</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#chauffeurs"><span>Chauffeurs</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#cc1">Comment ça marche</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#business"><span>Business</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="#cc2">Comment ça marche</a></li>
                <li><a href="#tarif">Les offres Smart Busiess</a></li>
              </ul>
            </li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        <a href="#about" class="get-started-btn scrollto">Inscriptions</a>
  
      </div>
    </header><!-- End Header -->
    <div class="container card col-md-5 mt-5 text-center">
        <div class="card-body mt-5">
            <p class="account">Utilisez la géolocalisation pour trouver les chauffeurs disponibles près de vous :</p>
            <button onclick="getLocation()" class="btn btn-outline-warning text-dark">Trouver ma position</button><br><br>
            <div id="map"></div>
            <form action="/new-trajet/traitement" method="POST">
            @csrf   
                <div class="form-group">
                  <label for="depart">Départ</label>
                  <select class="form-control" id="mySelect" name="departure">
                      <option selected>Ajouter une autre adresse de départ</option>
                      @foreach(DB::table('destinations')->pluck('depart')->unique() as $departement)
                      <option value="{{ $departement }}">{{ $departement }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="arrivee">Arrivée</label>
                  <select class="form-control" id="depart" name="arrival">
                    <option selected>Ajouter votre adresse d'arrivée</option>
                    @foreach(DB::table('destinations')->pluck('arrivee')->unique() as $departement)
                      <option value="{{ $departement }}">{{ $departement }}</option>
                    @endforeach
                  </select>
                  <br>
                </div>
                {{-- <input type="hidden" name="client_id" value="{{ $client->id }}"> --}}
                <button type="submit">Rechercher un chauffeur</button>
                <button class="button details" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <img src="{{ asset('images/icondetails.png') }}" alt="logo" class="button-icon">
                    Detais
                </button>
            </form>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasRightLabel">Details de vos courses</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <br>
                        <div class="dropdown mt-3">
                            <div class="md col-9">
                                <!--faire une boucle foreach pour lister les details-->
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="link-bottom btn btn-danger">Déconnexion</button>
                                </form>
                            </div>
                        </div>
                    </div>

            <script>
              function getLocation() {
                  if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(showPosition);
                  } else {
                  alert("La géolocalisation n'est pas prise en charge par ce navigateur.");
                  }
              }

              function showPosition(position) {
                  const lat = position.coords.latitude;
                  const lng = position.coords.longitude;

                  const map = new google.maps.Map(document.getElementById("map"), {
                  center: { lat: lat, lng: lng },
                  zoom: 15,
                  });

                  const marker = new google.maps.Marker({
                  position: { lat: lat, lng: lng },
                  map: map,
                  title: "Votre position",
                  });
              }
            </script>

            <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyyjAmNe-mfygOKajqPEINw1gTpR-uwNQ&callback=showPosition"
            async
            defer
            ></script>
        </div>
    </div>

    <script src="{{ asset('css/bootstrap5/js/bootstrap.js') }}"></script>

<script>
  // Obtenez la géolocalisation de l'utilisateur
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      // Utilisez l'API de géocodage de Google Maps pour obtenir l'adresse correspondant aux coordonnées géographiques
      var geocoder = new google.maps.Geocoder();
      var latlng = new google.maps.LatLng(latitude, longitude);
      geocoder.geocode({'latLng': latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {
            // Créez un élément d'option pour l'adresse et ajoutez-le à l'élément de sélection
            var address = results[0].formatted_address;
            var option = document.createElement("option");
            option.text = address;
            var select = document.getElementById("mySelect");
            //select.add(option);
            select.insertBefore(option, select.firstChild);
          } else {
            alert("Aucun résultat trouvé");
          }
        } else {
          alert("Erreur: " + status);
        }
      });
    }, function() {
      alert("La géolocalisation n'est pas prise en charge par votre navigateur");
    });
  } else {
    alert("La géolocalisation n'est pas prise en charge par votre navigateur");
  }
</script>
</body>
</html>



@extends('layouts.frontend')

@section('content')
{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Votre Evitrine </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <link href="css/tshirt.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
   <style>
:root {
  --jumbotron-padding-y: 3rem;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.btn-cart {
  color: #635d07;
  background-color: #ffe357db;
  border-color: #e2cf6c;
}
.btn-cart:hover {
  color: #0c0707;
  background-color: #f3b808;
  border-color: #d8a510;
}

/* //****************************** */
.bg-red {
    background-color: #fd6060!important;
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 1);
    font-weight: 500;
}
.navbar-light .navbar-nav .nav-link:hover {
    color: rgb(255, 223, 12);

}
.bg-dark {
    background-color: #075e7f!important;
}


.breadcrumb-item+.breadcrumb-item::before {
    display: inline-block;
    padding-right: .5rem;
    padding-left: .5rem;
    color: #fe5f5f;
    content: "/";
}
.breadcrumb a {
    color: #fe5f5f;
}

.breadcrumb-item.active {
    color: #075d7e;
}

.btn-outline-secondary {
    color: #000000;
    background-color: transparent;
    background-image: none;
    border-color: #eac860;
    background: #ffc107;
}


.btn-cart {
  color: #635d07;
  background-color: #ffe357db;
  border-color: #e2cf6c;
}
.btn-cart:hover {
  color: #0c0707;
  background-color: #f3b808;
  border-color: #d8a510;
}




   </style>
</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Votre Evitrine</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              @foreach ($cotegories as $categorie)
                <li class="nav-item">
                    <a class="nav-link" href="#">{{$categorie->nameCa}}</a>
                 </li>
                 @endforeach
            </ul>
        </div>
    </nav>
</header> --}}

<main role="main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <div class="card mb-4 box-shadow">
                        <img src="{{asset('images/'.$article->image)}}" class="card-img-top img-fluid" alt="Erreur !!">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="jumbotron-heading">{{$article->name}}</h1>
                    <h5>{{$article->PU}}€</h5>
                    <p class="lead text-muted">{{$article->designation}}</p>
                    <hr>
                    <label for="size">Choisissez la carte du paiment </label>
                    <select name="size" id="size" class="form-control">
                        <option value="v1">Visa Hello Prime</option>
                        <option value="v2">Mastercard Gold</option>
                        <option value="v3">Visa Premier</option>
                        <option value="v4">CPay Mastercard</option>
                        <option value="v5">Zero Mastercard</option>
                        <option value="v6">N26 Mastercard</option>
                    </select>
                    <p>
                        <a href="#" style="background-color :#f5cf0f" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                    </p>
                </div>
            </div>
        </div>


</main>

 {{-- <footer class="text-muted">
     <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Mon T-Shirt</p>
    </div> 
</footer>  --}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>
</body>
</html>
@endsection
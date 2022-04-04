
<?php
use App\Models\Categorie;
$categories = Categorie::all(); 
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{asset('img/favicon.png')}}">

<title>Votre Evitrine </title>

<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('js/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
<!-- Custom styles for this template -->
<link href="{{asset('css/theme.css')}}" rel="stylesheet">
<link href="css/tshirt.css" rel="stylesheet">
<script defer src="{{asset('https://use.fontawesome.com/releases/v5.0.9/js/all.js')}}" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
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
#sign{
  background-color: rgb(36, 117, 36) ; 
  width:80px;
  border-radius: 10%;
}
#sign:hover{
  color:white;
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
               <p class="text-white">Un site vitrine est un site internet qui présente les produits et services de votre activité, sans vendre en ligne. Un site vitrine a donc pour objectif d’apporter une présence en ligne à une entreprise, un artisan, une collectivité et autres, afin d’acquérir des contacts, prospects et clients via internet. Il s’adresse donc à toute personne ayant un objectif commercial mais sans vente directe en ligne.</p>
           </div>
           <div class="col-sm-4 offset-md-1 py-4">
               <h4 class="text-white">Contact</h4>
               <ul class="list-unstyled">
                   <li><a href="https://twitter.com/?lang=en" target="_blank" class="text-white">Follow on Twitter</a></li>
                   <li><a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank" class="text-white">Like on Facebook</a></li>
                   <li><a href="https://mail.google.com/mail/u/0/" target="_blank" class="text-white">Email me</a></li>
               </ul>
           </div>
       </div>
   </div>
</div>
<div class="navbar navbar-dark bg-dark box-shadow">
   <div class="container d-flex justify-content-between">
       <a href="#" class="navbar-brand d-flex align-items-center">
           <svg xmlns="{{asset('http://www.w3.org/2000/svg')}}" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
           <strong>Votre Evitrine</strong>
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <ul class="navbar-nav">
           {{-- <li class="nav-item">
               <a class="nav-link" href="{{asset('register')}}"> Sign in</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="{{asset('login')}}"> Sign up</a>
              </li> --}}
           <li class="nav-item">
               <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
           </li>
       </ul>
   </div>
</div>
{{-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$4 --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{asset('css/theme.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
   <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
       <div class="container">

           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               <ul class="navbar-nav me-auto">
               {{-- &&&&&&&&&&&&&&&&&&&&&& --}}
               <a class="nav-link dropdown-toggle" style="font-size:35px" href="/" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                categories
              </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{asset('/first')}}">All</a></li>
                  @foreach ($categories as $categorie)
                  <li><a class="dropdown-item" href="{{asset('first/'.$categorie->id)}}">{{$categorie->nameCa}}</a></li>
                  @endforeach
                </ul>
                    
               {{-- %%%%%%%%%%%%%%%%%%5 --}}
               </ul>

               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ms-auto">
                   <!-- Authentication Links -->
                   @guest
                       @if (Route::has('login'))
                           <li class="nav-item">
                               <a class="nav-link" id="log" href="{{ route('login') }}">{{ __('Log in') }}</a>
                           </li>
                       @endif

                       @if (Route::has('register'))
                           <li class="nav-item">
                               <a class="nav-link" id="sign" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                           </li>
                       @endif
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}
                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
               </ul>
           </div>
       </div>
   </nav>

   <main class="py-4">
       {{-- @yield('content') --}}
  
{{-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%55 --}}
{{--  bg-success --}}
<nav class="navbar navbar-expand-lg navbar-light">
   <a class="navbar-brand" href="#"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
       {{-- <ul class="navbar-nav">
         @foreach ($categories as $categorie)
           <li class="nav-item">
               <a class="nav-link" style="font-size: 25px; color:blue" href="{{asset('first/'.$categorie->id)}}">{{$categorie->nameCa}}</a>
            </li>
            @endforeach
            <li class="nav-item">
               <a class="nav-link" style="font-size: 25px; color:blue" href="{{asset('/first')}}">  all</a>
            </li>
       </ul> --}}
   </div>
</nav>
</header>
</body>




@yield('content')
<div style="height: 300px">

</div>
{{-- isii --}}
</main>
</div>
{{-- dfghj --}}
{{-- ############################### --}}
<!-- Footer -->
<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example21" class="form-control" />
                <label class="form-label" for="form5Example21">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
          repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
          eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          
          <!--Grid column-->
  
          <!--Grid column-->
          
          <!--Grid column-->
  
          <!--Grid column-->
          
          <!--Grid column-->
  
          <!--Grid column-->
          
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">fouad</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
{{-- ############################# --}}
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('https://code.jquery.com/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>
</body>
</html>

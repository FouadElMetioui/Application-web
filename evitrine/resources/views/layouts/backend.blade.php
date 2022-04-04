
<head>
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="icon" href="{{asset('img/admin.png')}}">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('admin')}}"><img  width="30" src="{{asset('img/admin.png')}}" alt="User"></a>
    <a class="navbar-brand" href="{{url('admin')}}">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('admin')}}">Home <span class="sr-only">(articles)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link bold" href="{{url('categorie')}}">Categories</a>
        </li>
        
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        
        <li class="nav-right" >
                <a href="{{url('categorie/create')}}" class="nav-link" class="font-weight-bold" style="font-size:20px" >Nouveau Categorie </a>
        </li>
        <li class="nav-right">
            <a href="{{url('article/create')}}" class="nav-link"  class="font-weight-bold" >Nouveau article </a>
        </li>
        <li class="nav-item">
            <a class="nav-link bold" href="{{url('/')}}">Front</a>
          </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
     
      </form>
    </div>
  </nav>
  @yield('content')

  
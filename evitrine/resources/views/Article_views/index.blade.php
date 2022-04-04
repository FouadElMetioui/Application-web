@extends('layouts.backend')
@section('content')

<head>
    <title>DASHBOARD</title>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
</head>
<body>
    

<div class="containr" style="padding:0; margin:0">
  <div class="row">
      <div class="col-md-12">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
           
           {{-- <div class="pull-right">
               <a href="{{url('article/create')}}" style="float:right" class="btn btn-dark">Nouveau article </a>
           </div> --}}
           {{-- <h1 style="text-align: center">la liste des articles</h1> --}}
           <div style="height:40px">

           </div>
           <table class="table" style="margin-left: 60px ;margin-right: 60px ">
            <head class="thead-dark">
                   <tr >
                       <th>Nom</th>
                       <th scope="col">designation</th>
                       <th>PU</th>
                       <th>quantite</th>
                       <th>image</th>
                       <th>action</th>
                   </tr>
               </head>
                   <body>
                 @foreach($articles as $article)

                      <tr>
                    <td style="align-items:center">{{$article->name}}</td>
                      <td>{{$article->designation }}</td>     
                      <td>{{$article->PU}}</td> 
                      <td>{{$article->quantite}}</td>  
                      <td>    <img src="images/{{$article->image }}" class="rounded-circle" style="width:150px"> </td>

                      <td style="align-items: center ; height: 30px;">
                       <form action="{{url('article/'.$article->id)}}" method ="get"> 
                           {{method_field('DELETE')}}
                           <a href="{{url('detailsA/'.$article->id)}}" class="btn btn-primary">visualiser</a>   
                           <a href="{{url('article/'.$article->id.'/edit')}}" class="btn btn-warning">edit</a>  
                           <button type="submit" class="btn btn-danger">supprimer</a>  
                       </form>
                      </td>     
                     </tr> 
                @endforeach
                   </body>
           </table>
      </div>
  </div>
</div>
</body>
@endsection 

@extends('layouts.backend')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
    <title>visualiser categorie</title>
</head>
<body>
    
<div  style="height: 50px">

</div>
 {{-- <h1 style="text-align: center">voici les article du categorie {{$categorie->nameCa}}</h1> --}}
 <div style="height:40px">

</div>
{{-- <table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">ID categorie</th>
        <th scope="col">Nom de categorie</th>

        <th scope="col">Date de Creation</th>
        <th scope="col">Date de Modification</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$categorie->id}}</th>
        <td>{{$categorie->nameCa}}</td>
        <td>{{$categorie->created_at}}</td>
        <td>{{$categorie->updated_at}}</td>
      </tr>
    
    </tbody>
  </table> --}}

  {{-- ********************************     ******************************** --}}
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
         @foreach($articles as $article )
          @if( $article->categorie_id == $categorie->id)

              <tr>
              <td>{{$article->name}}</td>
              <td>{{$article->designation }}</td>     
              <td>{{$article->PU}}</td> 
              <td>{{$article->quantite}}</td>  
              <td>    <img src="{{asset('images/'.$article->image )}}" class="rounded-circle" style="width:150px"> </td>

              <td>
               <form action="{{url('article/'.$article->id)}}" method ="get"> 
                   {{method_field('DELETE')}}
                   <a href="{{url('detailsA/'.$article->id)}}" class="btn btn-primary">visualiser</a>   
                   <a href="{{url('article/'.$article->id.'/edit')}}" class="btn btn-warning">edit</a>  
                   <button type="submit" class="btn btn-danger">supprimer</a>  
               </form>
              </td>     
             </tr> 
             @endif
        @endforeach
           </body>
   </table>

</body>
</html>
@endsection
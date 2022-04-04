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
    <title>visualiser</title>
</head>
<body>
    
<div  style="height: 50px">

</div>

<table class="table table-hover table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">designation</th>
        <th scope="col">PU</th>
        <th scope="col">quantite</th>
        <th scope="col">image</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">{{$article->id}}</th>
        <td>{{$article->designation}}</td>
        <td>{{$article->PU}}</td>
        <td>{{$article->quantite}}</td>
        <td>{{$article->image}}</td>
        <td>{{$article->created_at}}</td>
        <td>{{$article->updated_at}}</td>
      </tr>
    
    </tbody>
  </table>

</body>
</html>
@endsection
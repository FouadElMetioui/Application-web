@extends('layouts.backend')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/theme.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create new</title>
</head>
<body>


<div class="container">
         
    <div class="row">
        <div class="col-md-12">

        <form action="{{url('article/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group has-error" >
                <label for="">Nom</label>
                <input type="text" name ="name" class="form-control" >
            </div>
            <div class="form-group has-error" >
                <label for="">designation</label>
                <input type="text" name ="designation" class="form-control" >
            </div>
            <div class="form-group" >
                <label for="">PU</label>
                <input type="float" name ="PU" class="form-control">
            </div>
            <div class="form-group"> 
                <label for="">quantite</label>
                <input type="number" name = "quantite" class="form-control">
            </div>
          
            <div class="form-group"> 
                <label for="">id categorie</label>
                <input type="number" class="form-control" name = "categorie_id" >
            </div>
            <div class="form-group"> 
                <label for="">image</label>
                <input type="file" class="form-control" name = "image" >
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" style="background-color:gray" value="ajouter">
            </div>
        </form>

        </div>
    </div>
</div>
    
</body>
</html>
@endsection
@extends('layouts.backend')

@section('content')
<head>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
</head>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('article/'.$article->id)}}" method= "post">
            {{csrf_field()}}
            <div class="form-group">   
                <label for="">designation</label>
                <input type="text" name ="designation" class="form-control" value="{{ $article->designation }}">
            </div>
            <div class="form-group">
                <label for="">PU</label>
                <input type="number" name ="PU" class="form-control" value="{{ $article->PU }}">
            </div>
            <div class="form-group">
                <label for="">quantite</label>
                <input type="number" name ="quantite" class="form-control" value="{{ $article->quantite }}">
            </div>
            <div class="form-group">
                <label for="">image</label>
                <input type="string" name ="image" class="form-control" value="{{ $article->image }}">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" style="background-color:gray" value="modifier">
            </div>
        </form>

        </div>
    </div>
</div>

@endsection
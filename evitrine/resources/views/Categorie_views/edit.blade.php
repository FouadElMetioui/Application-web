@extends('layouts.backend')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
<div class="container" style="width: 600px">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('/categorie/'.$categorie->id)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">   
                <label for="">Nom du Categorie</label>
                <input type="text" name ="nameCa" class="form-control" value="{{ $categorie->nameCa }}">
            </div>
            
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="modifier">
            </div>
        </form>

        </div>
    </div>
</div>

@endsection
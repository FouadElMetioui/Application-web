@extends('layouts.backend')

@section('content')
<link rel="stylesheet" href="public\assets\css\bootstrap-grid.min.css">
<link href="{{asset('css/theme.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
<div class="container"  style="width: 600px">

    <div class="row">
        <div class="col-md-12">
        <form action="{{url('categorie/store')}}" method="get">
            <div class="form-group has-error" >
                <label for="">Nom du Categorie</label>
                <input type="text" name ="nameCa" class="form-control" ">
            </div>
            
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="Ajouter">
            </div>
        </form>

        </div>
    </div>
</div>

@endsection
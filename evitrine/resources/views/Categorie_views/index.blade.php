@extends('layouts.backend')

@section('content')

<head>
    <title>DASHBOARD</title>
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/js/bootstrap.bundle.js')}}">
</head>
<body>
    

<div class="containr">
  <div class="row">
      <div class="col-md-12">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
           
           {{-- <div class="pull-right">
               <a href="{{url('categorie/create')}}" style="float:right" class="btn btn-dark">Nouveau Categorie </a>
           </div> --}}
           {{-- <h1 style="text-align: center">la liste des categories</h1> --}}
           <div style="height:40px">

        </div>
           <table class="table" style="margin-left: 60px ;margin-right: 60px ">
            <head class="thead-dark">
                   <tr >
                       <th>ID Categorie</th>
                       <th scope="col">Nom </th>
                       <th scope="col">action </th>
                   </tr>
               </head>
                   <body>
                 @foreach($categories as $categorie)

                      <tr>
                      <td>{{$categorie->id }}</td>     
                      <td>{{$categorie->nameCa}}</td> 
                      <td>
                       <form action="{{url('categorie/'.$categorie->id)}}" method ="get"> 
                           {{method_field('DELETE')}}
                           <a href="{{url('details/'.$categorie->id)}}" class="btn btn-primary">visualiser</a>   
                           <a href="{{url('categorie/'.$categorie->id.'/edit')}}" class="btn btn-warning">edit</a>  
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

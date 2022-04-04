@extends('layouts.frontend')

@section('content')


<main role="main">

    <section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Commandez  votre <br><span class="badge badge-light">nouveau</span> <br>article <span class="badge badge-primary ">préféré </span>!</h1>
            <p class="lead text-muted">selectionner le produit.</p>

        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
            @foreach($articles as $article)
                @if($article->categorie_id == $categorie->id)
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img src="{{asset('images/'.$article->image)}}" class="card-img-top img-fluid" alt="Responsive image">
                        <div class="card-body">
                            <p class="card-text">{{$article->name}}<br>{{$article->designation}} </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">{{$article->PU}}$</span>
                                <a href="{{url('first/article/'.$article->id)}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                  @endif
             @endforeach
                <nav aria-label="..." style="display: center; justify-content: center;">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                      <li class="page-item active">
                        <a class="page-link" href="#">2 </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
        </div>
    </div>
  
</main>

{{-- <footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>merci d'avoire visiter notre store</p>
    </div>

</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/holder.min.js"></script>
</body>
</html> --}}
@endsection
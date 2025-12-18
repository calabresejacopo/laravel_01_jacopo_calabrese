<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next Goal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Next Goal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('chi-siamo')}}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('servizi')}}">Servizi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('articoli')}}">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid blog-page vh-100 ">
  <div class="row justify-content-center align-items-center">
     @foreach ($articoli as $articolo)
      <div class="col-12 col-md-6">
        <div class="card mx-auto" style="width: 18rem;">
           <img src="{{$articolo['img']}}" class="card-img-top" alt="...">
         <div class="card-body">
             <h5 class="card-title text-center">{{$articolo['titolo']}}</h5>
           <p class="card-text text-center">{{$articolo['sottotitolo']}}</p>
        <a href="{{route('dettaglio-articolo', ['titolo' => $articolo['titolo']])}}" class="btn btn-dark">LEGGI L'ARTICOLO</a>
    </div>
</div>
      </div>
     @endforeach
  </div>
</div>
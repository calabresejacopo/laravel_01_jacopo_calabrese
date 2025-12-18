<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Next Goal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
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
<div class="container-fluid bg-image vh-100">
    <div class="row justify-content-center align-items-center mt-5">
        <div class="col-12">
            <h1 class="text-center">
                {{$articolo['titolo']}}
            </h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center mt-5 mx-auto">
    <div class="col-12 col-md-6">
        <img src="https://marketplace.canva.com/MADasA13zzA/1/thumbnail_large-1/canva-moving-soccer-ball-around-splash-drops-on-the-stadium-field.-MADasA13zzA.jpg" alt="">
    </div>
    <div class="col-12 col-md-6">
        <p class="text-center text-white">
            {{$articolo['description']}}
        </p>
    </div>
</div>
</div>

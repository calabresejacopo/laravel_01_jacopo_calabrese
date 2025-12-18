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
    <div class="container-fluid vh-100 aboutus-page">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center mt-5">
                    CHI SIAMO
                </h1>
            </div>
        </div>
      
      <div class="row justify-content-center align-items-center mt-5">
        <div class="col-4 d-flex justify-content-center">
          <div class="card text-center" style="width: 18rem;">
            <img src="https://thumbs.dreamstime.com/b/d-icon-avatar-people-football-player-kicks-ball-cartoon-soccer-isolated-cutout-transparent-png-background-356294890.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">MANUEL</h5>
              <p class="card-text">Esperto di schemi e tattica</p>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
          <div class="card text-center" style="width: 18rem;">
            <img src="https://thumbs.dreamstime.com/b/d-render-cartoon-style-football-soccer-player-boy-cut-out-isolated-transparent-background-d-render-cartoon-style-356760768.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">DANIEL</h5>
              <p class="card-text">Osservatore calcistico</p>
            </div>
          </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
          <div class="card text-center" style="width: 18rem;">
            <img src="https://thumbs.dreamstime.com/b/d-icon-avatar-people-football-player-kicks-ball-cartoon-soccer-isolated-transparent-png-background-352290093.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">JACOPO</h5>
              <p class="card-text">Allenatore Nazionale Juniores</p>
            </div>
           </div>
          </div>
        </div>
      
    </div>
    











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
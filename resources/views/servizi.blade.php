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
    <div class="container-fluid vh-100 services-page d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center mt-5">
                    SERVIZI
                </h1>
                <h2 class="text-center mt-4 px-5">
                  Contenuti editoriali di alta qualità su analisi tattiche, approfondimenti statistici e storie esclusive dal mondo del calcio.
                </h2>
                <h2 class="text-center mt-4 px-5">
                  Consulenza strategica per club, agenzie e brand che desiderano ottimizzare la loro presenza nel settore calcistico.
                </h2>
                <h2 class="text-center mt-4 px-5">
                  Organizzazione di eventi, workshop e webinar per professionisti del calcio, appassionati e stakeholder del settore.
                </h2>
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
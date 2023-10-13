<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP-2-LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
    
    <div class="row">
    
    <div class="col s12">
        <h1>AJOUTER UN ETUDIANT - TP-2-LARAVEL</h1>
        <hr>
        
        @if (session('status'))
        <div class="alert alert-success">
        {{ session('status') }}
        </div>
        @endif
        
        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger"> {{ $error }} </li>
            @endforeach
        </ul>
       
        <form action="/ajouter/traitement" method="POST" class="form-group">
        @csrf
            <div class="form-group">
              <label for="Nom">Nom</label>
              <input type="text" class="form-control" id="Nom" name="nom">
            </div>
            <div class="form-group">
                <label for="Prenom">Prenom</label>
                <input type="text" class="form-control" id="Prenom" name="prenom">
              </div>
              <div class="form-group">
                <label for="Classe">Classe</label>
                <input type="text" class="form-control" id="Classe" name="classe">
              </div>
              <br> 
            <button type="submit" class="btn btn-primary">AJOUTER UN ETUDIANT</button>
            <br> <br> 
            <a href="/etudiant" class="btn btn-danger">Revenir à liste des etudiants</a>
          </form>

    </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
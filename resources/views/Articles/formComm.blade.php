{{-- 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud sur laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">Commentaire sur un article</h1>
      
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>   
@endif

  <ul>
    @foreach($errors->all() as $error)
        <li class="alert alert-danger">
           {{$error}}
        </li>
    @endforeach
  </ul>




<form method="post" action="formComm/traitement">
  @csrf
<div class="mb-3">
    <label for="Auteur" class="form-label">Auteur</label>
    <input type="string" class="form-control" name="nom_complet_auteur" placeholder="Entrer votre nom">
  </div>
  <div class="mb-3">
    <label for="commentaire" class="form-label">Commentaire</label>
    <textarea class="form-control"  name="contenu" rows="3" placeholder="Entrer votre commentaire"></textarea>
  </div>
  <div class="mb-3">
    <label for="date" class="form-label">Date creation</label>
    <input type="date" class="form-control" name="date_heure_creation">
  </div>
  <div class="mb-3">
    <label for="Article-id" class="form-label">Article-id</label>
    <input type="number" class="form-control" name="article_id">
  </div>
</form>
  <a href="formComm" class="btn btn-primary">Envoyer</a>
  <a href="" class="btn btn-danger">Annuler</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}
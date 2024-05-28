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
        <h1 class="text-center">Ajouter un article</h1>
          
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


        <form action="/ajouter/traitement" method="POST">
            @csrf
          <div class="mb-3">
            <label for="ImageArticle" class="form-label">Image de l'article</label>
            <input class="form-control" type="string" name="ImageArticle"  >
          </div>
          <div class="mb-3">
            <label for="TitreArticle" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="TitreArticle" placeholder="Entrez le titre de l'article">
          </div>
          <div class="mb-3">
            <label for="DescriptionArticle" class="form-label">Description de l'article</label>
            <textarea class="form-control"  name="DescriptionArticle" rows="3" placeholder="Entrez la description de l'article"></textarea>
          </div>

          <div class="mb-3">
            <label for="PublicationDate" class="form-label">Publié le</label>
            <input type="date" class="form-control" name="PublicationDate" >
          </div>

          <div class="mb-3">
            <input type="checkbox" class="form-check-input" name="statut">
            <label for="statut" class="form-check-label">A la une</label>
        </div>

          
          <button type="submit" class="btn btn-primary">Ajouter</button>
          <a href="/liste" class="btn btn-danger">Revenir a la liste des etudiants</a>
        </form>
      
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
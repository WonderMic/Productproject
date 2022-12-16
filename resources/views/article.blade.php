<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>

    <body>

    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<style>
            body {
                font-family: 'Nunito', sans-serif;
                align-items: center;

            }
        </style>
        <h1> Le formulaire </h1>

    <form action="/product" method="POST">
        @csrf
    <div class="w-50 p-3">
  <label for="Titre" class="form-label">Entrez le titre de produit :</label>
  <input type="Titre" class="form-control" id="Titre" name="Titre">
</div>
<select class="form-select w-50 p-3" aria-label="Default select example" id="Type" name="Type">
  <option selected>Quel est le type d'article?</option>
  <option value="Vetements">Vetements</option>
  <option value="Chaussure">Chaussure</option>
  <option value="Accesoire">Accesoire</option>
  <option value="autre">Autre...</option>
</select>
<div class="w-50 p-3">
  <label for="Categorie" class="form-label">Entrez la categorie du produit :</label>
  <input type="Categorie" class="form-control" id="Categorie" name="Categorie" >
</div>
<div class="w-50 p-3">
  <label for="Titre" class="form-label">Etiquette du produit : </label>
  <input type="Etiquette" class="form-control" id="Etiquette" name="Etiquette">
</div>
<div class="w-50 p-3">
  <label for="Texte" class="form-label">Veuiller entrer un texte :</label>
  <textarea class="form-control" id="Texte" rows="3" name="Texte"></textarea>
</div>

<button type="submit" class="btn btn-primary">Primary</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

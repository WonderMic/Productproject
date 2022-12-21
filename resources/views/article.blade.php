<!DOCTYPE html>
<html lang="en">
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
textarea { resize: none; }
.card { width: 25em; }
</style>

@extends('product')
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Le formulaire</h4>
            <div class="card-body">
                <form action="{{ url('product') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control  @error('Titre') is-invalid @enderror" name="Titre" id="Titre" placeholder="Veuillez entrez le titre" value="{{ old('Titre') }}">
                        @error('Titre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                    <select class="form-select  @error('Type') is-invalid @enderror"  aria-label="Default select example" id="Type" name="Type" value="{{ old('Type') }}">
                        <option selected>Quel est le type d'article?</option>
                        <option value="Vetements">Vetements</option>
                        <option value="Chaussure">Chaussure</option>
                        <option value="Accesoire">Accesoire</option>
                        <option value="autre">Autre...</option>
                      </select>
                      @error('Categorie')
                      <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <input type="text" class="form-control  @error('Categorie') is-invalid @enderror" name="Categorie" id="Categorie" placeholder="Entrez la categorie de l'article" value="{{ old('Categorie') }}">
                        @error('Categorie')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <input type="text" class="form-control  @error('Etiquette') is-invalid @enderror" name="Etiquette" id="Etiquette" placeholder="Entrez l'etiquette" value="{{ old('Etiquette') }}">
                        @error('Etiquette')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                      <div class="mb-3">
                        <input type="file" class="form-control  @error('Image') is-invalid @enderror" name="Image" id="Categorie" placeholder="Selectionne une image" value="{{ old('Image') }}">
                        @error('Image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>

                    <div class="mb-3">
                        <textarea class="form-control  @error('Texte') is-invalid @enderror" name="Texte" id="Texte" placeholder="Entrez un texte " value="{{ old('Texte') }}"> Veuillez entrer un texte  </textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary">Envoyer !</button>
                </form>
            </div>
        </div>
    </div>
@endsection

<br>
    <br>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>

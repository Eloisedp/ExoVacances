<!DOCTYPE html>
<html>
  <head>
    <title>Article {{ $article->id }}</title>
  </head>
  <body>
    <h1>Article {{ $article->id }}</h1>
    <ul>
      <li>Nom : {{ $article->nom }}</li>
      <li>Prix : {{ $article->prix }}</li>
      <li>Description: {{ $article->description }}</li>
    </ul>
    <a href= "/articles/{{$article->id}}/delete">
    <button> Supprimer l'article </button>
    </a> <br>
    <a href="{{ URL::action('ArticleController@edit', $article->id) }}">
    <button> Editer l'article </button>
    </a>
  </body>
</html>
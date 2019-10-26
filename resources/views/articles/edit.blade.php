<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <a href="{{ URL::action('ArticleController@index') }}">Retour à la liste</a> <br>
        <a href="{{ URL::action('ArticleController@show', $article->id) }}">Annuler</a>
      <h1>Editer l'article</h1> 

        <form action="PostController@update, $article" method="post">
        <div class="input-group">
            <label>Nom</label>
            <input type="text" name="name" placeholder={{ $article->nom }}/>
        </div>
        <div class="input-group">
            <label>Prix</label>
            <input type="number" name="price" placeholder="Prix de l'article" />
        </div>
        <div class="input-group">
            <label>Description</label>
            <textarea rows="15" cols="40" name="description" placeholder={{ $article->description }}></textarea>
        </div>
        <input type="submit" value="Enregistrer">
    </form>

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <a href="{{ URL::action('ArticleController@index') }}">Retour à la liste</a> <br>
        <a href="{{ URL::action('ArticleController@show', $article->id) }}">Annuler</a>
      <h1>Editer l'article</h1> 

        {{ Form::model($articles, [ 'url' => URL::action('ArticleController@update', $article ), 'method' => 'post'])}}
         <p>{{ Form::label('name', 'Nom :') }} {{ Form::text('title') }}</p>
         <p>{{ Form::label('number', 'Prix :') }} {{ Form::number('number') }}</p>
         <p>{{ Form::label('content', 'Description :') }} {{ Form::textarea('content') }}</p>
         {{ Form::submit('Enregistrer') }}
        {{ Form::close() }}





        <!--<form action='/articles' method="post">
        {{ csrf_field() }}
            <div class="input-group">
                <label>Nom</label>
                <input type="text" name="name" placeholder={{ $article->nom }}/>
            </div>
            <div class="input-group">
                <label>Prix</label>
                <input type="number" name="price" placeholder={{ $article->prix }} />
            </div>
            <div class="input-group">
                <label>Description</label>
                <textarea rows="15" cols="40" name="description" placeholder={{ $article->description }}></textarea>
            </div>
            <input type="submit" value="Enregistrer">
        </form> -->

    </body>
</html>
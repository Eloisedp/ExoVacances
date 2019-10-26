<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
  </head>
  <body>
    <h1> Bonjour </h1>
        {!! Form::open(['url' => 'articles']) !!}
            !! Form::label('nom', 'Entrez votre nom : ') !!}
            {!! Form::text('nom') !!}
            {!! Form::submit('Envoyer !') !!}
        {!! Form::close() !!}
  </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
  </head>
  <body>
    <h1> Bonjour </h1>
        {!! Form::open(['url' => 'articles']) !!}
            <p>{{ Form::label('name', 'Nom :') }} {{ Form::text('title') }}</p>
            <p>{{ Form::label('number', 'Prix :') }} {{ Form::number('number') }}</p>
            <p>{{ Form::label('content', 'Description :') }} {{ Form::textarea('content') }}</p>
            {!! Form::submit('Ajouter !') !!}
        {!! Form::close() !!}
  </body>
</html>
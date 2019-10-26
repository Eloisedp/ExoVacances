<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
  </head>
  <body>
    <h1> Bonjour </h1>
        <?php echo Form::open(['url' => 'articles']); ?>

            !! Form::label('nom', 'Entrez votre nom : ') !!}
            <?php echo Form::text('nom'); ?>

            <?php echo Form::submit('Envoyer !'); ?>

        <?php echo Form::close(); ?>

  </body>
</html><?php /**PATH /app/resources/views/articles/create.blade.php ENDPATH**/ ?>
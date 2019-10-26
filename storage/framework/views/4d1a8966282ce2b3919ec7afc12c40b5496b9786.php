<!DOCTYPE html>
<html>
  <head>
    <title>Create</title>
  </head>
  <body>
    <h1> Bonjour </h1>
        <?php echo Form::open(['url' => 'articles']); ?>

            <p><?php echo e(Form::label('name', 'Nom :')); ?> <?php echo e(Form::text('title')); ?></p>
            <p><?php echo e(Form::label('number', 'Prix :')); ?> <?php echo e(Form::number('number')); ?></p>
            <p><?php echo e(Form::label('content', 'Description :')); ?> <?php echo e(Form::textarea('content')); ?></p>
            <?php echo Form::submit('Ajouter !'); ?>

        <?php echo Form::close(); ?>

  </body>
</html><?php /**PATH /app/resources/views/articles/create.blade.php ENDPATH**/ ?>
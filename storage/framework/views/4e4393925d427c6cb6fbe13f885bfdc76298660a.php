<!DOCTYPE html>
<html>
  <head>
    <title>Articles</title>
  </head>
  <body>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h1>Article <?php echo e($article->id); ?></h1>
    <ul>
      <li>Nom : <?php echo e($article->nom); ?></li>
      <li>Prix : <?php echo e($article->prix); ?></li>
      <li>Description : <?php echo e($article->description); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <a href="<?php echo e(URL::action('ArticleController@create')); ?>">Ajouter un article</a> <br>
  </body>
</html><?php /**PATH /app/resources/views/articles/index.blade.php ENDPATH**/ ?>
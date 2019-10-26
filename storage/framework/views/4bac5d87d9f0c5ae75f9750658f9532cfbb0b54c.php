<!DOCTYPE html>
<html>
  <head>
    <title>Article <?php echo e($article->id); ?></title>
  </head>
  <body>
    <h1>Article <?php echo e($article->id); ?></h1>
    <ul>
      <li>Nom : <?php echo e($article->nom); ?></li>
      <li>Prix : <?php echo e($article->prix); ?></li>
      <li>Description: <?php echo e($article->description); ?></li>
    </ul>
    <a href= "/articles/<?php echo e($article->id); ?>/delete">
    <button> Supprimer l'article </button>
    </a> <br>
    <a href="<?php echo e(URL::action('ArticleController@edit', $article->id)); ?>">
    <button> Editer l'article </button>
    </a>
  </body>
</html><?php /**PATH /app/resources/views/articles/show.blade.php ENDPATH**/ ?>
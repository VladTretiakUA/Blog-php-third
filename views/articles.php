<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1 class="mb-3"><a href="/">My blog</a> </h1>
        <h3 class="mb-3"><a href="admin">Адмін панель</a></h3>
        <div >
          <?php foreach ($articles as $el): ?>
            <div class="article">
              <h3><a href="article.php?id=<?=$el->id?>"><?= $el->title ?></a></h3>
              <em>Опубліковано: <?= $el->date ?></em>
              <p><?= $el->content ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      <footer>
        <p> <b>&copy My blog.   2023</b> </p>
      </footer>
      </div>
  </body>
</html>

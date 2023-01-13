<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
        <header class="blog-header lh-1 py-3 mb-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">

            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="/">My blog</a>
            </div>
            <div class="col-4 text-center">
            </div>
          </div>
        </header>
        <div >
          <em>Опубліковано: <?= $article->date ?></em>
          <h3><?= $article->title ?></h3>
          <p><?= $article->content ?></p>
        </div>
      <footer>
        <p> <b>&copy My blog.   2023</b> </p>
      </footer>
      </div>
  </body>
</html>

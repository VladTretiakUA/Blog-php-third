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
        <h3 class="mb-3"><a href="../admin">Адмін панель</a></h3>
        <form method="post" action="../admin/add_article.php">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Назав статті</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Заголовок" value="<?= $article->title ?>" autofocus required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Дата</label>
            <input name="date" type="date" class="form-control" id="exampleFormControlTextarea1" value="<?= $article->date ?>" placeholder="01.01.01">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Текст статті</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $article->content ?></textarea>
          </div>
          <div class="col-auto">
            <input type="submit" class="btn btn-primary mb-3" value="Опублікувати">
          </div>
        </form>
      <footer>
        <p> <b>&copy My blog.   2023</b> </p>
      </footer>
      </div>
  </body>
</html>

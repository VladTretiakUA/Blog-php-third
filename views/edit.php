<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1 class="mb-3"> <a href="/">My blog</a> </h1>
        <h3 class="mb-3"><a href="../admin">Адмін панель</a></h3>
        <form method="post" action="../admin/edit.php">
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

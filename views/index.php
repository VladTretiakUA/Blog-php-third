<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My blog</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <!-- Custom styles for this template -->
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
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-primary" href="/admin">Admin panel</a>
      </div>
    </div>
  </header>


<main class="container">

  <div class="row mb-2">
    <h3 class="pb-4 mb-4 fst-italic border-bottom">
      Last Posts
    </h3>
    <?php foreach ($limit as $el): ?>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0"><?= $el->title ?></h3>
          <div class="mb-1 text-muted"><?= $el->date ?></div>
          <p class="card-text mb-auto"><?= $el->content ?></p>
          <a href="article.php?id=<?=$el->id?>" class="stretched-link">Читати</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Posts
      </h3>

      <?php foreach ($articles as $el): ?>
      <article class="blog-post">
        <h2 class="blog-post-title mb-1"><?= $el->title ?></h2>
        <p class="blog-post-meta"><em>Опубліковано: <?= $el->date ?></em></p>
        <p><?= $el->content ?></p>
        <a href="article.php?id=<?=$el->id?>">Читати</a>
        <hr>
      </article>
      <?php endforeach; ?>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">My blog</h4>
          <p class="mb-0"> Блог починаючого програміста</p>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p> <b>&copy My blog.   2023</b> </p>
  <p>
    <a href="/">Back to top</a>
  </p>
</footer>

  </body>
</html>

<?php

require_once 'database.php';
require_once 'models/articles.php';

$article = article_get($pdo);

include('views/article.php');

 ?>

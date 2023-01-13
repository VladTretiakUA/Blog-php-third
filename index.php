<?php

require_once 'database.php';
require_once 'models/articles.php';

$articles = articles_all($pdo);//array articles
$limit = articles_limit($pdo);

include('views/index.php');

 ?>

<?php

require_once '../database.php';
require_once '../models/articles.php';


$articles = articles_all($pdo);
include '../views/articles_admin.php';


 ?>

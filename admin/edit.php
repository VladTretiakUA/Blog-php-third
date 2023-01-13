<?php

require_once '../database.php';
require_once '../models/articles.php';

// $articles = articles_all($pdo);
// $articles = article_get($pdo);

include '../views/edit.php';

$id = $_GET['id'];
$title = trim($_POST['title']);
$date = trim($_POST['date']);
$content = trim($_POST['content']);

$sql = "UPDATE `articles` SET `title` = $title, `content` = $content, `date` = $date WHERE `id` = $id";
$query = $pdo->prepare($sql);
$query->execute ([$title, $content, $date]);
$article = $query->fetchAll(PDO::FETCH_OBJ);

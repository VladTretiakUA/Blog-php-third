<?php

require_once '../database.php';

include '../views/article_admin.php';

$title = trim($_POST['title']);
$date = trim($_POST['date']);
$content = trim($_POST['content']);

$sql = 'INSERT INTO `articles` (`id`, `title`, `content`, `date`)  VALUES (NULL, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute ([$title, $content, $date]);

header('Location: index.php');

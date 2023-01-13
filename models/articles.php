<?php
// require_once '../database.php';

function articles_all($pdo){
  $sql = 'SELECT * FROM articles ORDER BY `id` DESC';
  $query = $pdo->query($sql);
  return $query->fetchAll(PDO::FETCH_OBJ);
};

function articles_limit($pdo){
  $sql = 'SELECT * FROM articles ORDER BY `id` DESC LIMIT 2';
  $query = $pdo->query($sql);
  return $query->fetchAll(PDO::FETCH_OBJ);
};

function article_get($pdo){
  $sql = 'SELECT * FROM articles WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$_GET['id']]);
  return $query->fetch(PDO::FETCH_OBJ);
};

// function articles_new($pdo, $title, $content, $date){
//   $title = trim($title);
//   $date = trim($date);
//   $content = trim($content);
//
//
//   $sql = 'INSERT INTO `articles` (`id`, `title`, `content`, `date`)  VALUES (NULL, ?, ?, ?)';
//   $query = $pdo->prepare($sql);
//   return $query->execute ([$title, $content, $date]);
// };

// function articles_edit($id, $title, $date, $content){
//   $sql = "UPDATE `articles` SET `id` = $_GET['id'], `title` = $title, `content` = $content, `date` = $date WHERE `id` = $_GET['id']";
//   $query = $pdo->prepare($sql);
//   $query->execute ([$title, $content, $date]);
// };

function articles_delete($pdo){

};

 ?>

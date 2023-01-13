<?php
require_once '../database.php';

$id = $_GET['id'];

$sql = "DELETE FROM `articles` WHERE `articles`.`id` = ?";
$query = $pdo->prepare($sql);
$query->execute ([$id]);

header('Location: index.php');

 ?>

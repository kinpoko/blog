<?php require_once "common.php";?>
<?php
$st = $pdo->query("SELECT * FROM post ORDER BY id DESC ");
$posts = $st->fetchALL();

require 't_postlist.php';
?>
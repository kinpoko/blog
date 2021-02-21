<?php require_once "system/common.php";?>
<?php
    $st = $pdo->query("SELECT * FROM post ORDER BY id DESC  LIMIT 5");
    $posts = $st->fetchALL();
    require 't_index.php';
?>
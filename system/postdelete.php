<?php require_once "common.php";?>
<?php
  $st = $pdo->prepare("SELECT * FROM post WHERE id=?");
  $st->execute(array($_GET['id']));
  $post = $st->fetch();
  unlink('../'.$post['url']);
  $st = $pdo->prepare("DELETE FROM post WHERE id=?");
  $st->execute(array($_GET['id']));
  $st = $pdo->query("SET @i := 0");
  $st = $pdo->query("UPDATE post SET id = (@i := @i + 1)");
  
?>
記事を削除しました。
<a href='postlist.php'>一覧へ戻る</a>
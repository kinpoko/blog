<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>記事修正 | Kinpoko's BLOG</title>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<form method="post" action="postupdate.php">
  <div class="post-form">
      <h2>記事修正</h2>
      <p>題名</p>
      <p><input type="hidden" name="id" value="<?php echo $post['id'] ?>"></p>
      <p><input type="text" name="title" size="40" value="<?php echo $post['title'] ?>"></p>
      <p>概要</p>
      <p><textarea name="description" rows="3" cols="40"><?php echo $post['description'] ?></textarea></p>
      <p>タグ</p>
      <p><textarea name="tag" rows="1" cols="40"><?php echo $post['tag'] ?></textarea></p>
      <p>本文</p>
      <p><textarea name="contents" rows="8" cols="50"><?php echo $post['content'] ?></textarea></p>
      <p><input name="date" type="date"></p>
      <p><input name="submit" type="submit" value="修正"></p>
      <p><?php echo $error ?></p>
  </div>
</form>
</body>
</html>
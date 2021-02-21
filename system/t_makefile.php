<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>記事投稿 | Kinpoko's BLOG</title>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<form method="post" action="makefile.php">
  <div class="post-form">
    <h2>記事投稿</h2>
    <p>題名</p>
    <p><input type="text" name="title" size="40"></p>
    <p>概要</p>
    <p><textarea name="description" rows="3" cols="40"></textarea></p>
    <p>タグ</p>
    <p><textarea name="tag" rows="1" cols="40"></textarea></p>
    <p>本文</p>
    <p><textarea name="contents" rows="8" cols="50"></textarea></p>
    <p><input name="date" type="date" /></p>
    <p><input name="submit" type="submit" value="投稿"></p>
    <p><?php echo $error ?></p>
  </div>
</form>
</body>
</html>
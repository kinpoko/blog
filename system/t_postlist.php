<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>管理画面</title>
    <meta name="description" content="HTML/CSSとPHPで自作ブログ">

    <!-- CSS -->
    <link href="blog.css" rel="stylesheet" >

  </head>
  <body>
    <div class = "main">

  <h1>記事の修正/<a href="makefile.php">新規作成</a>/削除</h1>
    <div class = "post-list">
        <?php foreach($posts as $post){ ?>
        <h2 class = "post-title"><a href='../<?php echo $post['url']?>'> <?php echo $post['title'] ?> </a></h2>
        <p class="post-date">更新：<?php echo $post['datestamp'] ?>
        <a href='postupdate.php?id=<?php echo $post['id'] ?>'>修正</a>
        <a href='postdelete.php?id=<?php echo $post['id'] ?>' onclick ="return confirm('削除してよろしいですか？')" >削除</a>
        </p>
        <?php } ?>
    </div>

  </body>
</html>
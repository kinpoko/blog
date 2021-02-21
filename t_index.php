<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kinpoko's BLOG</title>
    <meta name="description" content="HTML/CSSとPHPで自作ブログ">

    <!-- CSS -->
    <link href="blog.css" rel="stylesheet" >

  </head>
  <body>
    <div class = "main">
      <?php require "header.php" ?>
      <div class = "main-contents wrapper">
        <div class = "post-list">
          <h2>最近の記事</h2>
          <?php foreach($posts as $post){ ?>
            <h2 class = "post-title"><a href='<?php echo $post['url']?>'> <?php echo $post['title'] ?> </a></h2>
            <p class="post-date">
            更新：<?php echo $post['datestamp'] ?>
            </p>
        
          <?php } ?>
        </div>
        <?php require "side.php" ?>
      </div>
      <?php require "footer.php" ?>
    </div>

  </body>
</html>
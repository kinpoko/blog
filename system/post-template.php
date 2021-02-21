<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><%PAGETITLE></title>
    <meta name="description" content="<%PAGEMETA>">

    <!-- CSS -->
    <link href="blog.css" rel="stylesheet" >

  </head>
  <body>
     
    <div class = "main">
        <?php require "header.php" ?>
        <div class = "main-contents wrapper">
            <div class = "post-contents">
                <h2 class = "post-title"><%PAGETITLE></h2>
                <p class = "contents"><%PAGECONTENTS></p>
                <p class="post-date"><%PAGETIME></p>
                <?php $fileurl= basename(__FILE__); ?>
                <?php require "pagetransition.php" ?>
            </div>
            <?php require "side.php" ?>
        </div>
        <?php require "footer.php" ?>
    </div>

    </body>
</html>
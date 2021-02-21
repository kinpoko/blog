<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kinpokoのプロフィール</title>
    <meta name="description" content="Kinpokoのプロフィール">

    <!-- CSS -->
    <link href="blog.css" rel="stylesheet" >

  </head>
  <body>
     
    <div class = "main">
        <?php require "header.php" ?>
        <div class = "main-contents wrapper">
            <div class = "post-contents">
              <div class = "profile-image"></div>
                <h2 class = "profile-name">Kinpoko</h2>
                <p class = "profile-contents">
                  大阪に住む学生。プログラミングの勉強のためブログ作成。最近めちゃくちゃ寝る。<br>
                  <a class = "profile-account" href="https://github.com/kinpoko">GitHubのアカウント作った</a><br>
                </p>
            </div>
            <?php require "side.php" ?>
        </div>
        <?php require "footer.php" ?>
    </div>

    </body>
</html>
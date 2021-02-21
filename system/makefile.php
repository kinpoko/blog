<?php require_once "common.php";?>
<?php
  $error = $title = $contents = $date = $description = $tag = '';
  if (@$_POST['submit']) {
	  $title = $_POST['title'];
	  $contents = $_POST['contents'];
	  $description = $_POST['description'];
	  $date = $_POST['date'];
	  $tag = $_POST['tag'];
	  if (!$title) $error .= 'タイトルがありません。<br>';
	  if (!$description) $error .= '概要がありません。<br>';
	  if (mb_strlen($title) > 80) $error .= 'タイトルが長すぎます。<br>';
	  if (!$contents) $error .= '本文がありません。<br>';
	  if (!$date == "0000-00-00") $error .= '投稿時間を設定してください。<br>';
	  if (!$error) {
		  $template = "post-template.php";	// テンプレ－ト読み込み
	
		  $contents = mb_convert_encoding($contents, "utf-8","AUTO");
			
		  $contents = nl2br($contents);
			
		  $filename = rand( 1000000, 9999999) . ".php";

		  $postcontent = file_get_contents( $template);

		  $postcontent = str_replace( "<%PAGETITLE>", htmlspecialchars($title), $postcontent);
		  $postcontent = str_replace( "<%PAGEMETA>", htmlspecialchars($description), $postcontent);
		  $postcontent = str_replace( "<%PAGECONTENTS>", $contents, $postcontent);
		  $postcontent = str_replace( "<%PAGETIME>", $date, $postcontent);

		  $handle = fopen(  '../'.$filename, 'w');
		  fwrite( $handle, $postcontent);
		  fclose( $handle );
		  
		  $st = $pdo->query("INSERT INTO post(title,url,tag,description,content,datestamp) VALUES('$title','$filename','$tag','$description','$contents','$date')");
		  $st = $pdo->query("SET @i := 0");
  		  $st = $pdo->query("UPDATE post SET id = (@i := @i + 1)");
		  header('Location: ../index.php');
          exit();

     }
  }
  require 't_makefile.php';
?>




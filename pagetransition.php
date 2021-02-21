<?php require_once "system/common.php";?>
<?php
$st = $pdo->prepare("SELECT * FROM post WHERE url =?");
$st->execute(array($fileurl));
$post = $st->fetch();
$st = $pdo->query("SELECT max(id), min(id) FROM post");
$num = $st->fetch();
?>

<p class = "page-transition">
    <h2>
    <?php if($num[1] < $post['id'] ){ 
        $st = $pdo->prepare("SELECT * FROM post WHERE id =?");
        $st->execute(array($post['id'] - 1));
        $backpost = $st->fetch();
        ?>
        <span class = "mg-20"><a href='<?php echo $backpost['url']?>'>back</a></span>
                        <?php }?>
            <span class = "mg-20">| </span>
    <?php if($num[0] > $post['id'] ){ 
        $st = $pdo->prepare("SELECT * FROM post WHERE id =?");
        $st->execute(array($post['id'] + 1));
        $nextpost = $st->fetch();
        ?>
            <span class = "mg-20"><a href='<?php echo $nextpost['url']?>'>next </a></span>
                        <?php }?>
    </h2>
</p>
              
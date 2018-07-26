<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
</head>
<body>
<h1>PHP-2</h1>
<h2>1 урок</h2>
<h2>Модели данных и ООП</h2>
<h4>Домашняя работа</h4>
<h2>Новости</h2>

<?php
foreach ( $data as $new ) {
    ?>
    <a href="/article.php?id=<?php echo $new->id; ?>"><h3><?php echo $new->header; ?></h3></a>
    <p><?php echo $new->article; ?></p>
    <hr>
    <?php
}
?>

</body>
</html>
<!DOCTYPE html>
<html>
<head lang="ru">
    <meta charset="UTF-8">
    <title>Новостной портал</title>
</head>
<body>
<div></div>
    <?php while($news = mysql_fetch_assoc($res)):?>
      <?php echo $news['header'];?>
      <?php echo $news['content'];?>
        <a href="<?php echo $news['path'];?>">Читать новость</a>
    <?php endwhile; ?>
<div id="right_menu"><a href="../views/add_news.php">Добавить новость</a></div>
</body>
</html>
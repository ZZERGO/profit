<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
</head>
<body>
<a href="/admin">Админка</a>
<?php foreach ($this->data as $page){ ?>
    <article>
        <h1>
            <a href=" /news/<?php echo $page->id;?> " ><?php echo $page->title; ?></a>
        </h1>
        <b>Автор:</b><?php echo !empty($page->author) ? $page->author->lastname :  'без автора'?>
        <div><?php echo $page->short_story ?></div>
    </article>
<?php } ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Все новости</title>
</head>
<body>
<a href="/adminka">Админка</a>

    <article>
        <h1><?php echo $this->title ?></h1>
        Автор: <?php echo !empty($article->author) ? $article->author->lastname{0} . $article->author->firstname{0} . '.' . $article->author->middlename{0} :  'без автора'?>
        <div><?php echo $article->short_story ?></div>
    </article>


</body>
</html>
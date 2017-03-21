<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Название</title>
</head>
<body>
<a href="/admin">Админка</a>
<a href="/">На главную</a>


    <article>
        <h1><?php echo $title; ?></h1>
        <b><b></b>Автор: </b><?php echo !empty($author_id) ? $this->data->author->lastname :  'без автора'?></p>
        <div><?php echo $short_story . '<p>' . $full_story . '</p>'; ?></div>
    </article>


</body>
</html>
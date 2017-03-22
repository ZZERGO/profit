<html>

<a href="/admin/">Назад в админку</a>

<div id="wrapper">
    <form method="POST" action="addnews">
        <fieldset style="width: 300px">
            <legend >Данные для новости</legend>
			
            <p class="mtext"><label for "fname">Заголовок:</label></p>
            <p><input type="text" name="title" id="fname" placeholder="Название статьи" required></p>
			
            <p class="mtext"><label for "mname">Короткая новость:</label></p>
            <p><input type="text" name="short_story" id="mname" placeholder="Введение" required></p>
			
            <p class="mtext"><label for "lname">Текст новости:</label></p>
            <p><textarea rows="5" cols="50" name="full_story" id="lname" placeholder="Полный текст новости" required></textarea></p>
			
        </fieldset>
        </br>
        <input type="submit" name="enter" value="Отправить">
        <input type="reset" value="Очистить форму">
    </form>
</div>
</html>
<html>

<a href="/admin/">Назад в админку</a>

<div id="wrapper">
    <form method="POST" action="adduser">
        <fieldset style="width: 300px">
            <legend >Личные данные</legend>
            <p class="mtext"><label for "fname">Имя:</label></p>
            <p><input type="text" name="firstname" id="fname" placeholder="Имя" required></p>
            <p class="mtext"><label for "mname">Отчество:</label></p>
            <p><input type="text" name="middlename" id="mname" placeholder="Отчество" required></p>
            <p class="mtext"><label for "lname">Фамилия:</label></p>
            <p><input type="text" name="lastname" id="lname" placeholder="Фамилия" required></p>
            <p><label>Логин: <input type="text" name="login" required></label></p>
            <p><label>Пароль: <input type="password" name="pass" required></label></p>
            <p><label>E-mail: <input type="email" name="email" required></label></p>
            <p><label>Моб.тел.: <input type="text" name="phone_mobile"></label></p>
            <p><label>Ваш пол: <input type="radio" name="gender" value="Мужской">Мужской <input type="radio" name="gender" value="Женский">Женский</label></p>
        </fieldset>


        </br></br>
        <input type="submit" name="enter" value="Отправить">
        <input type="reset" value="Очистить форму">
    </form>
</div>
</html>

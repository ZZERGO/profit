<form  action="/login/" autocomplete="on" method="post">
    <h1>Вход</h1>
    <p>
        <label for="username" class="uname" data-icon="u" > Ваш e-mail или логин</label><br>
        <input id="username" name="username" required="required" type="text" placeholder="например vasya@pupkin.ru">
    </p>
    <p>
        <label for="password" class="youpasswd" data-icon="p"> Ваш пароль </label><br>
        <input id="password" name="password" required="required" type="password" placeholder="например 123456" />
    </p>
    <p class="keeplogin">
        <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
        <label for="loginkeeping">Запомнить меня</label>
    </p>
    <p class="login button">
        <input type="submit" value="Войти" />
    </p>
    <p class="change_link">
        Не зарегистрированы еще ?
        <a href="/register" class="to_register">Присоединяйтесь</a>
    </p>
</form>
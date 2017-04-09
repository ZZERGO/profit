<?php
if ($_POST){
    echo '<h1>Регистрация успешна</h1>';
    echo '<meta http-equiv="refresh" content="2;URL=http://profit/">';
} else {
  echo '

    <form  action="/register/" method="post" autocomplete="on">
        <h1>Регистрация</h1>
        <p>
            <label for="username" class="uname" data-icon="u" > Ваше имя</label>
            <input id="username" name="username" required="required" type="text" placeholder="например Вася Пупкин">
        </p><p>
            <label for="username" class="email" data-icon="u" > Ваш e-mail</label>
            <input id="username" name="email" required="required" type="text" placeholder="например vasya@pupkin.ru">
        </p>
        <p>
            <label for="password" class="password" data-icon="p"> Ваш пароль </label>
            <input id="password" name="password" required="required" type="password" placeholder="например 123456" />
        </p>
        <p class="login button">
            <input type="submit" value="Отправить" />
        </p>
    </form>
  
  ';
};
?>



<?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<p style='color:#780101;'>Неправильное имя пользователя или пароль</p>";
}
else if (isset($_GET['error']) && $_GET['error'] == 2) {
    echo "<p style='color:#780101;'>Введите имя пользователя и пароль</p>";

}
?>



<!DOCTYPE html>
<html lang="ru">
<head>
      <meta charset="UTF-8">
      <title>Пример формы</title>
</head>
<body>
    <form action="protected.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br>
        <input type="submit" value="Отправить">
        <input type="checkbox" name="remember" value="1"> Запомнить меня

    </form>

</body>
</html>
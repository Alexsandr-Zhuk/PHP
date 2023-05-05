<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ФОРМА </title>
    <style>
        @import "style.css";
    </style>

</head>

<body>

    <form action="register.php" method="post">
        <div class="form-element">
            <label> Имя</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Телефон</label>
            <input type="text" name="phone" required />
        </div>
        <div class="form-element">
            <label>Почта</label>
            <input type="text" name="email" required />
        </div>
        <div class="form-element">
            <label>Пароль</label>
            <input type="text" name="pass" required />
        </div>
        <div class="form-element">
            <label>Повтор пароля</label>
            <input type="text" name="repeatpass" required />
        </div>
        <button type="submit" name="register" value="register"> Регистрация </button>
    </form>
    <form action="login.php" method="post">
        <div class="form-element">
            <label>Имя</label>
            <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Пароль</label>
            <input type="password" name="pass" required />
        </div>
        <button type="submit" name="login" value="login"> Войти </button>
    </form>




</body>

</html>
<?php
require_once('db.php');

$username = $_POST['username'];
$pass = $_POST['pass'];

if(empty($username) || empty($pass));
{
    echo "Заполните поля";
} else {

    $sql = "SELECT * FORM `test` WHERE usermame = '$username' AND pass = '$pass'";
    $result = $conn->query('sql');

    if($result->num_rows >0)
    {
        while($row = $result->fetch_assoc()){
            echo "Добро пожаловать";
        }
    } else {
        echo "Пользователь не найден"
    }

} 
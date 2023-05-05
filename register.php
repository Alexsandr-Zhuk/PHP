<?php
require_once('db.php');
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['username'];

if(empty($username) || empty($phone) || empty($email) || empty($pass)){
    echo "Заполните поля";
} else {
    if($pass!=$repeatpass){
       echo "Пароли не совпадают";
    } else
    $sql = "INSERT INTO `test`(username,phone,email,pass) VALUES('$username','$phone','$email','$pass')";
    if($conn -> query($sql) == True){
       echo "Успешная регистрация";
    }
    else {
      echo  "Ошибка";
    }
    
}


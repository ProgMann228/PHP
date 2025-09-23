<?php

session_start();

$users = [
    'admin' => 'password',
    'user1' => '12345'
];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST["name"]?$_POST["name"]:"";
    $password=$_POST["password"]?$_POST["password"]:"";

    if($name!=="" && $password!==""){

        if(isset($users[$name]) && $password==$users[$name]){
            $_SESSION['name']=$name;

            if(isset($_POST['remember'])){
                setcookie('username', $name, time() + 3600*24*30, "/");
            }
            echo "Добро пожаловать ", $name;
            echo '<br><a href="logout.php">Выйти</a>';

        }
        else {
            header("Location: login.php?error=1");
            exit;
        }
    }
    else {
        header("Location: login.php?error=2");
        exit;
    }
}
else{
    if(!isset($_SESSION['name'])){
        if(isset($_COOKIE['username'])){
            $_SESSION['name']=$_COOKIE['username'];

        }
        else {
            header("location:login.php");
            exit;
        }
    }

    echo "Добро пожаловать обратно, ".$_SESSION['name'];
    echo '<br><a href="logout.php">Выйти</a>';


}

?>
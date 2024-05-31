<<?php

session_start();


$host = "localhost";
$user = "root";
$password = "";
$db = "aesthetic"; 

$data = mysqli_connect($host, $user, $password, $db);

if($data == false) {
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='".$name."' AND password='".$pass."'";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

    if ($row) {
        if ($row["usertype"] == "admin") {
            $_SESSION['username'] = $name;
            $_SESSION['usertype'] = "admin";
            header("Location: adminhome.php");
            exit(); // It's a good practice to call exit() after header redirection
        } 
        else {
        $message = "Username and Password do not match";
        $_SESSION['loginMessage'] = $message;
        header("Location: login.php");
        exit();
          }
    }
}


?>

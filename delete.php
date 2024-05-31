<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "aesthetic"; 

$data = mysqli_connect($host, $user, $password, $db);

if($_GET['store_id']){

    $phone_id=$_GET['store_id'];

    $sql="DELETE FROM stored WHERE id='$phone_id' ";
    $result=mysqli_query($data,$sql);


    if($result){
        $_SESSION['message']='Delete of Phone is Successfull';
        header("location:adminhome.php");
    }

}






?>
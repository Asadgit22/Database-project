<?php



session_start();

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'aesthetic');



$user=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$model=$_POST['model'];
$osversion=$_POST['osversion'];
$location=$_POST['location'];
$occupation=$_POST['occupation'];




$sql="INSERT INTO userinfodata(name,email,phone,model,osversion,location,occupation) VALUES('$user','$email','$phone','$model','$osversion','$location','$occupation')";

$result=mysqli_query($con,$sql);

if($result){
    echo "Data is uploaded successfuly";
}
else{
    echo "failed";
}


















?>
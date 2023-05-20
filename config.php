<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$password=$_POST['password'];



$conn =new mysqli('localhost', 'root', '', 'info_form');

if($conn){
$sql= "insert into `form`(username, email, gender, phone, password)
values('$username','$email', '$gender', '$phone', '$password')";
$result=mysqli_query($conn, $sql);
if($result){
    echo 'data insertion successful';
}
}else{
    die(mysqli_error($conn));
}
}

?>
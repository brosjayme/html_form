<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$password=$_POST['password'];



$conn =new mysqli_connect('localhost', 'root', '', 'info_form');

if($conn){
    echo 'connection secure!!';
}
}

?>
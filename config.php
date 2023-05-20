<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD ='';
$GENDER ='';
$EMAIL = '';
$PHONE = '';
$DATABASE ='info_form';


$conn = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $GENDER, $EMAIL, $PHONE, $DATABASE);

if($conn){
    echo 'connection secure!!';
}


?>
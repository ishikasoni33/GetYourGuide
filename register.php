<?php
require 'config.php';
$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$Email =$_POST['Email'];
$Password =$_POST['Password'];

//database connection

if($con->connect_error) {
    die("connection failed".$con->connect_error);
}else{
    $stmt=$con->prepare("insert into register1 (first_name,last_name,Email,Password) values (?,?,?,?)");
    $stmt->bind_param("ssss", $first_name,$last_name,$Email,$Password);
    $stmt->execute();
    echo"registration successfully...";
    $stmt->close();
    $con->close();
}
?>
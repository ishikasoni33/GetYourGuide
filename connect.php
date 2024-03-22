<?php
$your_name = $_POST['your_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$con = new mysqli('localhost','root','root','phpadminpanel');
if($con->connect_error)
{
    die('Connection Failed :'.$con->connect_error);
}
else
{
$stmt = $con->prepare("INSERT INTO contact (your_name,email,message) VALUES(?,?,?)");
$stmt->bind_param("sss", $your_name,$email,$message);
$stmt->execute();
echo "Message  sent successfully";

$stmt->close();

$con->close();
}
?>
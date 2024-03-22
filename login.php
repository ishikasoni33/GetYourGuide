<?php
require 'config.php';
// Get email and password from the POST request
$Email = $_POST['Email'];
$Password = $_POST['Password'];
// Check if the email exists in the database
$stmt = $con->prepare("SELECT * FROM register1 WHERE Email = ?");
$stmt->bind_param("s", $Email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Email exists, verify password
    $row = $result->fetch_assoc();
    if (($Password== $row['Password'])){
        echo "LOGIN SUCCESSFULLY!";
        header("Location: OurServices.php");
        exit();
    } else {
        echo "Incorrect Email OR password!";
    }
    } else {
    echo "USER NOT REGISTERED!";
}
$stmt->close();
$con->close();
?>

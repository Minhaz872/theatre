<?php include("conn.php");
header('location:userprofile.php');
$name = $_SESSION['username'];

$fname = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['password'];

$reg = "UPDATE user set name = '$fname',email = '$email', phone = '$phone',password = '$pass' where username = '$name'";
mysqli_query($conn,$reg);
?>
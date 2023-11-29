<?php include("validation.php");
header('location: login.php');

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$s = "select * from user where username = '$username'";
$result = mysqli_query($conn,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username Already Taken";
}
else{
    $reg = "insert into user(username,name,email,phone,password) values('$username','$name','$email','$phone','$password')";
    mysqli_query($conn,$reg);
    echo "Registration Successful";
}

?>
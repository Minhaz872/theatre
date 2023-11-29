<?php
session_start();


$conn = mysqli_connect('192.168.1.174', 'root', 'Huawei@2023','theatre');
//$conn = mysqli_connect('localhost', 'root', '','theatredb');
mysqli_select_db($conn, 'theatre');

$username = $_POST['username'];
$password = $_POST['password'];

/*$s = "select * from user where username = '$username' && password = '$password'";
$t = "select * from admin where ssn = '$username' && password = '$password'";
$result1 = mysqli_query($conn,$s);
$result2 = mysqli_query($conn,$t);
*/

/*$num = mysqli_num_rows($result1);
$num2 = mysqli_num_rows($result2);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location: home.php');
}
else{
    header('location: home.php');
}
*/
if (is_numeric($username)) {
    // if input string is a number
    $q= "select ssn ,password from admin where ssn=('$username') and password=('$password')";
    $result=mysqli_query($conn,$q);
    $a_row = mysqli_num_rows($result);
    if ($a_row==1){
        echo "Admin Detected";
        header("location: adminpage.php");
    }
    else{
        echo "Admin credentials are wrong";
    }
}
else {
    $q= "select username, password from user where username=('$username') and password=('$password')";
    $result=mysqli_query($conn,$q);
    $u_row = mysqli_num_rows($result);
    if ($u_row == 1){
        echo "user logged in";
        $_SESSION['username']=$username;
        header("location: home.php");
    }
    else {
        header("location: login.php?msg=failed");
        echo '<script type="text/javascript">';
        echo ' alert("JavaScript Alert Box by PHP")';  //not showing an alert box.
        echo '</script>';
    }

}

?>
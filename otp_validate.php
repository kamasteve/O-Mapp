<?php
 $link = mysqli_connect("localhost", "root", "", "operations_and_maintenance");
//5gy
$user_email = trim($_POST['email']);
$user_password = trim($_POST['password']);
$sql = "SELECT tel_no,E_NAME,USERNAME,otp FROM users WHERE tel_no='$user_email'";
$resultset = mysqli_query($link, $sql) or die("database error:". mysqli_error($link));
$row = mysqli_fetch_assoc($resultset);
if($row['otp']==$user_password){
echo "success";
session_start();
$_SESSION['user_session'] = $row['E_NAME'];
$_SESSION['tel_no'] = $row['tel_no'];
$_SESSION['USERNAME'] = $row['USERNAME'];
//header("location:dashboard.php");
} else {
echo "fail"; // wrong details

}
?>
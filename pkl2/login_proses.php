<?php
$email   = $_POST['email'];
$pass       = md5($_POST['password']);

include 'koneksi.php';

$user = mysqli_query($connect,"select * from users where email='$email' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
    header("location:login.php");
}
?>
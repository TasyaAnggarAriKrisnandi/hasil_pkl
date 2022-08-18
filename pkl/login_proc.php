<?php
// session_destroy();
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// To protect MySQL injection for Security purpose

include 'koneksi.php';


$query = mysqli_query($db, "select * from users where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);

//echo "$rows";
if ($rows == 0) {
    $_SESSION['login_user']=$username; // Initializing Session
    header("location:approved1.php"); // Redirecting To Other Page
    echo "berhasil";
    } else {
    $error = "Username or Password is invalid";
    echo $error;
    }
   // mysql_close($db); // Closing Connection
    }
    }
    ?>

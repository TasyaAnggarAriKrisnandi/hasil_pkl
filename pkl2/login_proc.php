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

if (TRUE !== ldap_bind($ldap_connection, $ldap_username, $ldap_password)){
	$connection = mysqli_connect("192.168.132.33", "admin", "123456789", "doc");

// SQL query to fetch information of registerd users and finds user match.
 $query = "select * from users where username='$username' and password='$password'";
 $res=mysqli_query($connection, $query);

$rows = mysqli_num_rows($res);
// echo $rows;
if ($rows == 1) {
// 	echo $username;
// echo $password;
$_SESSION['login_user']=$username; // Initializing Session
header("location:my_doc.php"); // Redirecting To Other Page
//echo "berhasil";
} else {

//  echo $ldap_username;
	// echo $ldap_password;
	    $error = "Username or Password is invalid";
echo $error;
// header("location:index.php"); // Redirecting To Other Page
    die('<p>Failed to bind to LDAP server.</p>');
}

}
else {
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("192.168.132.33", "admin", "123456789","doc");
// Selecting Database
//$db = mysql_select_db("doc", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection, "select * from users where username='$username'");
$rows = mysqli_num_rows($query);
//echo "$rows";
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location:my_doc.php"); // Redirecting To Other Page
//echo "berhasil";
} else {
$error = "Username or Password is invalid";
echo $error;
}
mysql_close($connection); // Closing Connection
}

}
}
?>
<?php
 
// Konfigurasi Database
$host       = 'localhost'; // host
$username   = 'root'; // username database
$password   = ''; // password database
$dbname     = 'gcm system'; // nama database
 
$db = mysqli_connect($host, $username, $password, $dbname);
 
if ($db) {
    echo "Database Terhubung";
} else {
    echo "Database Error";
}
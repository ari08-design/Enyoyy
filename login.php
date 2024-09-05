<?php
require 'function.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query_sql= "INSERT INTO login(username , password) 
VALUES('$username', '$password')";

if (mysqli_query($conn, $query_sql)) {
 header("location index1.html");
} else{
	echo "login gagal:" . mysqli_error($conn);
}

 
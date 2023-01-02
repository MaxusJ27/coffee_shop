<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

//creating connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL query to create table
$sql = "CREATE TABLE `accounts` (
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
  	username varchar(50) NOT NULL,
  	password varchar(255) NOT NULL,
  	email varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;";

if (mysqli_query($conn, $sql)) {
    echo "Accounts is created successfully";
} else {
    echo "Error creating accounts: " . mysqli_error($conn);
}
mysqli_close($conn);

?>
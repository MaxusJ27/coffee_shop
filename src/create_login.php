<?php

  $servername = "localhost";
  $username = "root";
  $password = "";

  //creating connection
  $conn = mysqli_connect($servername, $username, $password);

  //checking connection
  if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
  }

  //creating a new database
  $sql = "CREATE DATABASE login";
  if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }

  //close connection
  mysqli_close($conn);

 ?>
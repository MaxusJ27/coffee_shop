<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "login";


  //Creating connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  //Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //request info from the form
  if (isset($_POST['new']) && $_POST['new'] == 1) {
    echo "Connected to form";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_REQUEST['email'];
    // $pembekal = $_REQUEST['Pembekal'];

    //Database query to insert data
    $sql = "INSERT INTO accounts (`id`, `username`, `password`, `email`)
            VALUES (NULL, '$username', '$hashed_password', '$email')";

    if (mysqli_query($conn, $sql)) {
      header("Location: register.php");
    } else {
      echo "Error insert data: " . mysqli_error($conn);
    }
  }

  mysqli_close($conn);
?>
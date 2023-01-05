<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shopping_cart";

  //creating connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  //check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  //SQL query to create table
$sql = "CREATE TABLE `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) NOT NULL,
    `type` varchar(200) NOT NULL,
    `desc` text NOT NULL,
    `price` decimal(7,2) NOT NULL,
    `rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
    `quantity` int(11) NOT NULL,
    `img` text NOT NULL,
    `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;";

  if (mysqli_query($conn, $sql)) {
    echo "Shopping cart products is created successfully";
  } else {
    echo "Error creating products: " . mysqli_error($conn);
  }
  mysqli_close($conn);

 ?>

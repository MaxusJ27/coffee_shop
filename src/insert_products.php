<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";


//Creating connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//Database query to insert data
$sql = "INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(5, 'Smart Watch', '<p>Unique watch made with stainless steel, ideal for those that prefer interative watches.</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Powered by Android with built-in apps.</li>\r\n<li>Adjustable to fit most.</li>\r\n<li>Long battery life, continuous wear for up to 2 days.</li>\r\n<li>Lightweight design, comfort on your wrist.</li>\r\n</ul>', '29.99', '0.00', 10, '../assets/logo-circle-2.png', '2019-03-13 17:55:22'),
(6, 'Wallet', '', '14.99', '19.99', 34, 'wallet.jpg', '2019-03-13 18:52:49'),
(7, 'Headphones', '', '19.99', '0.00', 23, 'headphones.jpg', '2019-03-13 18:47:56'),
(8, 'Digital Camera', '', '69.99', '0.00', 7, 'camera.jpg', '2019-03-13 17:42:04');";

if (mysqli_query($conn, $sql)) {
    echo "Products successfully inserted!";
} else {
    echo "Error insert data: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
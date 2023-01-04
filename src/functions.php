<?php
session_start();
function pdo_connect_mysql()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shopping_cart";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}
// Template header, feel free to customize this
function template_header($title)
{
    $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
    echo <<<EOT
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
    <html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coffee Shop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="module" src="index.js"></script>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="products.css">
        <link rel="stylesheet" href="product.css">
        <link rel="stylesheet" href="location.css">
        <link rel="stylesheet" href="cart.css">
        <link rel="stylesheet" href="explore.css">
        
    </head>
    
    <body class="loggedIn">
        <!-- <header class="header"> -->
    
        <header id="navbar">
        <ul class="navlist">
        
        <li><a href="register.php"><i class="fas fa-sign-out-alt fa-rotate-180"></i></a></li>
        <li><a href="index.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <a href="#" class="logo">
        <img src="../assets/logo-circle-2.png" width="50" alt="logo">
        </a>
        <li><a href="locations.php">Locations</a></li>
        <li><a href="explore.php">Explore</a></li>
        <li><a href="cart.php"> <i class="fas fa-shopping-cart"><span>$num_items_in_cart</span></i><a/></li>
        </ul>
            <div class="bx bx-menu" id="menu-icon"></div>
        </header>
    <main>
EOT;
}
// Template footer
function template_footer()
{
    $year = date('Y');
    echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Shopping Cart System</p>
            </div>
        </footer>
        <!-- connecting to Bootstrap cdn -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="tab.js"></script>
    <script src="product.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    </body>
</html>
EOT;
}
?>
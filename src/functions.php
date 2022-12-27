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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/neomorphism?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" href="index.css">
    </head>
    
    <body class="loggedIn">
        <!-- <header class="header"> -->
    
        <header id="navbar">
        <ul class="navlist">
        
        <li><a href="register.php"><i class="fas fa-sign-out-alt fa-rotate-180"></i></a></li>
        <li><a href="index.php">About</a></li>
        
        <li><a href="#guide">FAQs</a></li>
        <li><a href="products.php">Products</a></li>
        <a href="#" class="logo">
        <img src="../assets/logo-circle-2.png" width="50" alt="logo">
        </a>
        <li><a href="locations.php">Locations</a></li>
        <li><a href="#company">Company</a></li>
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
    <script src="tab.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    </body>
</html>
EOT;
}
?>
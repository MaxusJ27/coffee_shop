<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}
?>
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
    <link rel="stylesheet" href="https://unpkg.com/neomorphism?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">
    <script src="index.js" type="module"></script>



</head>

<body class="loggedIn">
    <!-- <header class="header"> -->

    <header id="navbar">
        <a href="#" class="logo">
            <img src="../assets/logo-circle-2.png" width="50" alt="logo">
        </a>
        <ul class="navlist">

            <li><a href="#about-us">About</a></li>
            <li><a href="#guide">FAQs</a></li>
            <li><a href="#places">Places</a></li>
            <li><a href="#reviews">Review</a></li>
            <li><a href="#company">Company</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
        </ul>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header>
    <main>
        <div class="gradient-container">
            <canvas id="gradient-canvas" data-transition-in width="800" height="600" />
        </div>
        <div class="home">
            <div class="welcome">
                <h1 style="color: white;">Welcome, <?= $_SESSION['name'] ?>!</h1>
            </div>
            <img src="../assets/logo-circle-2.png">
        </div>
    </main>



</body>

</html>
<?php
include 'functions.php';
session_start();

// $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// // Include and show the requested page
// include $page . '.php';
?>
<?= template_header('Product') ?>
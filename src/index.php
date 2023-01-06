<?php
include 'functions.php';
session_start();

// $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// // Include and show the requested page
// include $page . '.php';
?>
<?= template_header('Product') ?>
<div class="main-page">
    <div class="gradient-container">
        <canvas id="gradient-canvas" data-transition-in width="800" height="600" />
    </div>
    <div class="triangle">
        <div class="home-content">
            <div class="home-text" data-aos="fade-right" data-aos-duration="800">
                <h1>
                    Satisfy all your coffee cravings.
                </h1>
                <h2>Welcome, <?= $_SESSION['name'] ?></h2>
                <p>
                    Millions of coffee websites exists worldwide, but Covfee stands out being the offering the cheapest coffee products in the market.</p>
            </div>
            <div class="home-image">
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <img src="../assets/coffee-walking.gif" alt="logo-image">
            </div>
        </div>
    </div>
</div>
<div class="info-cards index-card" id="guide">
    <div data-aos="fade-up" data-aos-duration="1500">
        <div class="row">
            <div class="column">
                <div class="card" id="card-1">
                    <div class="face face1">
                        <div class="content-2">
                            <span class="stars">
                                <h1>Need A Coffee?</h1>
                                <p id="four">
                                    Covfee uses the latest machine learning recommendation system
                                    to help find one that most suits you!
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" id="card-2">
                    <div class="face face1">
                        <div class="content-1">
                            <span class="stars">
                                <h1>Where Do I Order?</h1>
                                <p>
                                    Click on the
                                    <button onclick="location.href='products.php'" id="one">product</button>
                                    button where you will be redirected to our product page.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card" id="card-3">
                    <div class="face face1">
                        <div class="content-3">
                            <span class="stars">
                                <h1>When Should I Travel?</h1>
                                <p id="three">
                                    The best time
                                    to do your travelling is between December and April.
                                    Otherwise, make sure you have an umbrella with you at all times!
                                </p>
                            </span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="column">
                <div class="card" id="card-4">
                    <div class="face face1">
                        <div class="content-2">
                            <span class="stars">
                                <h1>Want To Know More?</h1>
                                <p id="two">
                                    Read up more about Covfee by clicking on this <button
                                        onclick="location.href='explore.php'" id="one">explore</button> button.
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= template_footer() ?>
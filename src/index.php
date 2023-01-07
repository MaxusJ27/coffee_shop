<?php
include 'functions.php';
session_start();

?>
<?= template_header('Product') ?>
<div class="main-page">
    <!-- background gradient container -->
    <div class="gradient-container">
        <canvas id="gradient-canvas" data-transition-in width="800" height="600" />
    </div>
    <!-- background black triangle -->
    <div class="triangle">
        <div class="home-content">
            <div class="home-text" data-aos="fade-right" data-aos-duration="800">
                <h1>
                    Satisfy all your coffee cravings.
                </h1>
                <h2>Welcome, <?= $_SESSION['name'] ?></h2>
                <p>
                    Millions of coffee websites exists worldwide, but Covfee stands out being the offering the cheapest
                    coffee products in the market.</p>
            </div>
            <div class="home-image">
                <!-- background circles animation  -->
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
                <img src="./assets/index/coffee-walking.gif" alt="walking coffee">
            </div>
        </div>
    </div>
</div>
<!-- list of responsive cards  -->
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
                        <div class="content-1">
                            <span class="stars">
                                <h1>Where Can I Get One?</h1>
                                <p id="three">
                                    If you prefer physical locations instead of ordering online, then click on
                                    <button onclick="location.href='locations.php'" id="one">locations</button> to find
                                    physical locations nearby you.
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
                                <h1>Want To Learn More?</h1>
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
<?php
include 'functions.php';
session_start();

// $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// // Include and show the requested page
// include $page . '.php';
?>
<?=template_header('Product')?>
    <div class="main-page">
        <div class="gradient-container">
            <canvas id="gradient-canvas" data-transition-in width="800" height="600" />
        </div>
        <div class="home">
            <div id="welcome">
                <h1">Welcome, <?= $_SESSION['name'] ?></h1>
            </div>
            <img src="../assets/logo-circle-2.png">
        </div>
    </div>
    <div class="info-cards" id="guide">
                    <div class="row">
                        <div class="column">
                            <div class="card" id="card-1">
                                <div class="face face1">
                                    <div class="content-2">
                                        <span class="stars">
                                            <h1>What Should I Expect?</h1>
                                            <p id="four">
                                                Expect this to be the most fun-filled action you'll ever have.
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
                                        <span id="stars">
                                            <h1>How Do I Book?</h1>
                                            <p>
                                                Click on the
                                                <button onclick="location.href='#register'" id="one">register</button>
                                                button where you will be redirected to our registration page.
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
                                            <h1>What Do I Need?</h1>
                                            <p id="two">
                                                For foreign travellers, a passport will be required.
                                            </p>
                                            <p id="two">
                                                For local travellers?
                                                Nothing!
                                            </p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
<?=template_footer()?>


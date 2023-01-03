<?php
include 'functions.php';
session_start();

// $page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// // Include and show the requested page
// include $page . '.php';
?>
<?= template_header('Product') ?>
<div class="info-carousel" id="about-us">
    <div class="logo-text">
        <h1>Geoloco</h1>
        <img src="../assets/icon/durian.png" alt="logo-name">
    </div>

    <div class="animated-about-title">
        <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="2500">
            <div class="text-top">
                <span>Why </span>
            </div>
        </div>

    </div>
    <!-- vertical slider  -->
    <section class="carouselPlace">
        <div data-aos="fade-up" data-aos-duration="1500">
            <div id="carouselPlaces" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="item">
                            <div class="item-left">
                                <p>On November 11th 2022, Geoloco was born to find trending unique places using
                                    our AI recommendation system.
                                    As part of the celebration, you can now browse our website to build up your
                                    latest travel list!
                                </p>
                            </div>
                            <div class="item-right" id="item-right-1">
                                <img src="../assets/logo-circle-2.png" alt="first slide img">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="item">
                            <div class="item-left">
                                <p>Geoloco also provides you with the proper guidance and tips for travelling,
                                    so that you can enjoy your travel without the headache that may come with
                                    it. The tips are also personalized and relevant to the specific places
                                    you're travelling to.
                                </p>
                            </div>
                            <div class="item-right">
                                <img src="../assets/logo-circle-2.png" alt="first slide img">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="item">
                            <div class="item-left">
                                <p>
                                    Geoloco updates you with the check out the latest undiscovered places in
                                    Malaysia
                                    for convenience. It also informs you about the situations that may affect
                                    your travels, such as weather forecast, haze, etc.
                                </p>
                            </div>
                            <div class="item-right">
                                <img src="../assets/logo-circle-2.png" alt="first slide img">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="0"
                        class="active img-thumbnail" id="carousel-button-1">
                    </button>
                    <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="1" class="img-thumbnail"
                        id="carousel-button-2"></button>
                    <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="2" class="img-thumbnail"
                        id="carousel-button-3"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPlaces"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPlaces"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </div>
    </section>
    <!-- </div> -->
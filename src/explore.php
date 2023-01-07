<?php
include 'functions.php';
session_start();
?>
<?= template_header('Explore') ?>
<div class="explore-main">
    <div class="explore-info">
        <div class="explore-title">
            <h1 data-aos="fade-left" data-aos-duration="800">Explore</h1>
            <p data-aos="fade-right" data-aos-duration="1600">Learn more about the different coffees out there so that
                you
                can make better decisions.</p>
        </div>
        <div class="coffee-infographics">
            <img src="./assets/explore/coffee-infographics.png" alt="coffee-info">
        </div>
    </div>

</div>
<div class="explore-carousel">
    <div class="info-carousel" id="about-us">

        <div class="animated-about-title">
            <div data-aos="fade-left" data-aos-easing="linear" data-aos-duration="2500">
                <div class="text-top">
                    <span>Introducing </span>
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
                                    <h1>Cappucino</h1>
                                    <p>A cappuccino is an espresso-based coffee drink that originated in
                                        Austria and was later popularized in Italy and is prepared with steamed milk
                                        foam (microfoam).
                                    </p>
                                </div>
                                <div class="item-right" id="item-right-1">
                                    <img src="./assets/explore/capuccino.png" alt="first slide img">
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="item">
                                <div class="item-left">
                                    <h1>Americano</h1>
                                    <p>Caffè Americano is a type of coffee drink prepared by diluting an espresso with
                                        hot water, giving it a
                                        similar strength to, but different flavor from, traditionally brewed coffee.
                                    </p>
                                </div>
                                <div class="item-right">
                                    <img src="./assets/explore/americano.png" alt="second slide img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="item-left">
                                    <h1>Mocha</h1>
                                    <p>A caffè mocha, also called mocaccino, is a chocolate-flavoured warm beverage that
                                        is a variant of a
                                        caffè latte, commonly served in a glass rather
                                        than a mug. Other commonly used spellings are mochaccino and also mochachino.
                                    </p>
                                </div>
                                <div class="item-right">
                                    <img src="./assets/explore/mocha.png" alt="third slide img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="item-left">
                                    <h1>Espresso</h1>
                                    <p>Espresso is a coffee-brewing method
                                        of Italian origin, in which a small amount of nearly boiling water is forced
                                        under high of pressure
                                        through finely-ground coffee beans.
                                    </p>
                                </div>
                                <div class="item-right">
                                    <img src="./assets/explore/espresso.png" alt="fourth slide img">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="item">
                                <div class="item-left">
                                    <h1>Latte</h1>
                                    <p>Caffè latte often shortened to just latte
                                        in English, is a coffee beverage of Italian origin
                                        made with espresso and steamed milk. Variants include the chocolate-flavored
                                        mocha or replacing the coffee with another beverage base such as masala chai
                                        (spiced Indian tea), mate, and matcha.
                                    </p>
                                </div>
                                <div class="item-right">
                                    <img src="./assets/explore/latte.png" alt="fifth slide img">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="0"
                            class="active img-thumbnail" id="carousel-button-1">
                        </button>
                        <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="1"
                            class="img-thumbnail" id="carousel-button-2"></button>
                        <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="2"
                            class="img-thumbnail" id="carousel-button-3"></button>
                        <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="3"
                            class="img-thumbnail" id="carousel-button-4"></button>
                        <button type="button" data-bs-target="#carouselPlaces" data-bs-slide-to="4"
                            class="img-thumbnail" id="carousel-button-5"></button>
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
    </div>
</div>
<?= template_footer() ?>
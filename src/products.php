<?php
include 'functions.php';
$pdo = pdo_connect_mysql();

// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products WHERE type="cold" LIMIT 4');
$stmt->execute();
$cold_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT * FROM products WHERE type="energy" LIMIT 4');
$stmt->execute();
$energy_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT * FROM products WHERE type="recent" LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?= template_header('Products') ?>
<div class="products-info">
    <div class="products-description">
        <h2 data-aos="fade-up" data-aos-duration="800">Choose your antidote.</h2>
        <p data-aos="fade-up" data-aos-duration="1600">Covfee provides and recommends you a list of essential beverages
            to start your day fresh,
            whether it be something for a relaxing chilly season, or you need something to help your burn the
            midnight
            oil.
        </p>
    </div>
    <video autoplay muted loop id="company-video">
        <source src="./assets/products/Coffee-Products.mp4" type="video/mp4">
    </video>
</div>
<div class="products" id="products">
    <div class="products-lists">
        <div class="tab">
            <button class="tablinks" onclick="openLink(event, 'Recent')">Recently Added</button>
            <button class="tablinks" onclick="openLink(event, 'Relax')">Relaxing</button>
            <button class="tablinks" onclick="openLink(event, 'Energize')">Energizing</button>
        </div>
        <div id="Recent" class="tabcontent" data-aos="fade-right" data-aos-duration="800">
            <div class="tab-wrapper">
                <h2>Want something new?</h2>
            </div>
            <div class="info-cards products-cards">
                <div class="row">
                    <?php foreach ($recently_added_products as $product): ?>
                        <div class="column product-col">
                            <div class="card individual-product"
                                onclick="window.location='product.php?id=<?= $product['id'] ?>'">
                                <div class="face face1">
                                    <!-- <a href="product.php?id=<?= $product['id'] ?>"> -->
                                    <div class="prod">
                                        <!-- <div class="product-description"> -->
                                        <span class="product-name">
                                            <?= $product['name'] ?>
                                        </span>
                                        <!-- </div> -->
                                        <div class="product-img">
                                            <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                                        </div>
                                        <span class="product-price">
                                            RM<?= $product['price'] ?>
                                            
                                        </span>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="Relax" class="tabcontent" data-aos="fade-right" data-aos-duration="800">
            <div class="tab-wrapper">
                <h2>Something to keep you warm and relaxed.</h2>
            </div>
            <div class="info-cards products-cards">
                <div class="row">
                    <?php foreach ($cold_products as $product): ?>
                        <div class="column product-col">
                            <div class="card individual-product"
                                onclick="window.location='product.php?id=<?= $product['id'] ?>'">
                                <div class="face face1">
                                    <!-- <a href="product.php?id=<?= $product['id'] ?>"> -->
                                    <div class="prod">
                                        <!-- <div class="product-description"> -->
                                        <span class="product-name">
                                            <?= $product['name'] ?>
                                        </span>
                                        <!-- </div> -->
                                        <div class="product-img">
                                            <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                                        </div>
                                        <span class="product-price">
                                            RM
                                            <?= $product['price'] ?>
                                            
                                        </span>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="Energize" class="tabcontent" data-aos="fade-right" data-aos-duration="800">
            <div class="tab-wrapper">
                <h2>Beverages to energize your soul.</h2>
            </div>
            <div class="info-cards products-cards">
                <div class="row">
                    <?php foreach ($energy_products as $product): ?>
                        <div class="column product-col">
                            <div class="card individual-product"
                                onclick="window.location='product.php?id=<?= $product['id'] ?>'">
                                <div class="face face1">
                                    <!-- <a href="product.php?id=<?= $product['id'] ?>"> -->
                                    <div class="prod">
                                        <!-- <div class="product-description"> -->
                                        <span class="product-name">
                                            <?= $product['name'] ?>
                                        </span>
                                        <!-- </div> -->
                                        <div class="product-img">
                                            <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
                                        </div>
                                        <span class="product-price">
                                            RM<?= $product['price'] ?>
                                            
                                        </span>
                                    </div>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= template_footer() ?>
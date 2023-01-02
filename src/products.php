<?php
include 'functions.php';
$pdo = pdo_connect_mysql();

// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added ASC LIMIT 4');
$stmt->execute();
$old_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?= template_header('Products') ?>
<div class="products">
    <div class="products-info">
        <div class="products-description">
            <h2>Choose your antidote.</h2>
            <p>Covfee provides and recommends you a list of essential beverages to start your day fresh,
                whether it be something for a relaxing chilly season, or you need something to help your burn the
                midnight
                oil.
            </p>
        </div>
        <video autoplay muted loop id="company-video">
            <source src="../assets/Coffee-Products.mp4" type="video/mp4">
        </video>
    </div>
    <div class="products-lists">
        <div class="tab">
            <button class="tablinks" onclick="openLink(event, 'Recent')">Recently Added</button>
            <button class="tablinks" onclick="openLink(event, 'Relax')">Relaxing</button>
            <button class="tablinks" onclick="openLink(event, 'Energize')">Energizing</button>
        </div>
        <div id="Recent" class="tabcontent">
            <h2>Want something new? Look at our latest lists of products!</h2>
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
                                                &dollar;<?= $product['price'] ?>
                                                <?php if ($product['rrp'] > 0): ?>
                                                    <?php endif; ?>
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
        <div id="Relax" class="tabcontent">
            <h2>Feeling chilly? How about something to keep you warm and relaxed?</h2>
            <div class="product-list">
                <?php foreach ($recently_added_products as $product): ?>
                    <div class="individual-product">
                        <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
                            <img src="<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                            <span class="name">
                                <?= $product['name'] ?>
                            </span>
                            <span class="price">
                                &dollar;<?= $product['price'] ?>
                                <?php if ($product['rrp'] > 0): ?>
                                    <span class="rrp">&dollar;<?= $product['rrp'] ?></span>
                                    <?php endif; ?>
                            </span>
                        </a>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
        <div id="Energize" class="tabcontent">
            <h2>Beverages to energize your soul</h2>
            <div class="product-list">
                <?php foreach ($recently_added_products as $product): ?>
                    <div class="individual-product">
                        <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
                            <img src="<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                            <span class="name">
                                <?= $product['name'] ?>
                            </span>
                            <span class="price">
                                &dollar;<?= $product['price'] ?>
                                <?php if ($product['rrp'] > 0): ?>
                                    <span class="rrp">&dollar;<?= $product['rrp'] ?></span>
                                    <?php endif; ?>
                            </span>
                        </a>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= template_footer() ?>
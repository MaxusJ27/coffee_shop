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
                whether it be something for a relaxing chilly season, or you something to help your burn the midnight
                oil.
            </p>
        </div>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openLink(event, 'Recent')">Recently Added</button>
        <button class="tablinks" onclick="openLink(event, 'Relax')">Relax</button>
        <button class="tablinks" onclick="openLink(event, 'Energize')">Energy</button>
    </div>
    <div id="Recent" class="tabcontent">
        <h2>Recently Added Products</h2>
        <div class="product-list">
            <?php foreach ($recently_added_products as $product): ?>
            <a href="product.php?id=<?=$product['id']?>" class="product">
                <img src="<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name"><?= $product['name'] ?></span>
                <span class="price">
                    &dollar;<?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                    <!-- <span class="rrp">&dollar;<?= $product['rrp'] ?></span> -->
                    <?php endif; ?>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="Relax" class="tabcontent">
        <h2>Feeling chilly? How about something to keep you warm and relaxed?</h2>
        <div class="product-list">
            <?php foreach ($recently_added_products as $product): ?>
            <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name"><?= $product['name'] ?></span>
                <span class="price">
                    &dollar;<?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                    <span class="rrp">&dollar;<?= $product['rrp'] ?></span>
                    <?php endif; ?>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="Energize" class="tabcontent">
        <h2>Beverages to energize your soul</h2>
        <div class="product-list">
            <?php foreach ($recently_added_products as $product): ?>
            <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
                <img src="<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['name'] ?>">
                <span class="name"><?= $product['name'] ?></span>
                <span class="price">
                    &dollar;<?= $product['price'] ?>
                    <?php if ($product['rrp'] > 0): ?>
                    <span class="rrp">&dollar;<?= $product['rrp'] ?></span>
                    <?php endif; ?>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

</div>
</div>
<!-- <script>
    function openLink(evt, Recommendations) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(Recommendations).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script> -->
<?= template_footer() ?>
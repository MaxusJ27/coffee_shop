<?php
include "functions.php";
$pdo = pdo_connect_mysql();
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if (!$product) {
        exit('Product not found!');
    }
} else {
    exit('Product not found!');
}
?>

<?= template_header('Product') ?>
<div class="product">
    <div class="return-button">
        <button class="coffee" id="neu-button">
            <a href="products.php"><i class="fas fa-coffee"></i></a>
        </button>
        <h3>My order</h3>
        <button class="love" id="neu-button">
            <i class="fas fa-heart"></i>
        </button>
    </div>
    <div class="product-img">
        <img src="<?= $product['img'] ?>" width="300" height="300" alt="<?= $product['name'] ?>">
    </div>
    <div class="product-description">
        <h1 class="name">
            <?= $product['name'] ?>
        </h1>
        <span class="price">
            &dollar;<?= $product['price'] ?>
            <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?= $product['rrp'] ?></span>
                <?php endif; ?>
        </span>
        <div class="description">
            <?= $product['desc'] ?>
        </div>
        <form method="post" action="cart.php" id="product-form">
            <div class="frame">
                <button onclick="decrement()" type="button" id="neu-button"><i class="fas fa-minus"></i></button>
                <input id="quantity" type="number" name="quantity" value="1" min="1" max="<?= $product['quantity'] ?>"
                    placeholder="Quantity">
                <button onclick="increment()" type="button" id="neu-button"><i class="fas fa-plus"></i></button>
            </div>
            <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
            <input id="submit" type="submit" value="Add To Cart">

        </form>
    </div>
</div>

<?= template_footer() ?>
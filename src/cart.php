<?php
include "functions.php";
$pdo = pdo_connect_mysql();
session_start();
/*
Create, Read, Update, Delete (CRUD) backend for items in Cart 
*/

// Read (R) items from cart
if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
    $product_id = (int) $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];
    // ceck if product exists in database
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_POST['product_id']]);
    // if exists, fetch product from database
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $product;
    if ($product && $quantity > 0) {
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_id, $_SESSION['cart'])) {
                $_SESSION['cart'][$product_id] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_id] = $quantity;
            }
        } else {
            $_SESSION['cart'] = array($product_id => $quantity);
        }
    }
    header('location: cart.php');
    exit;
}

// Remove (R) items from create
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}
// Update(U) quantity of items in cart
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $id = str_replace('quantity-', '', $k);
            $quantity = (int) $v;
            // carry out necessary validation
            if (is_numeric($id) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // once validated, update the quantity
                $_SESSION['cart'][$id] = $quantity;
            }
        }
    }
    header('location: cart.php');
    exit;
}
// Once place order button is clicked, send to placeorder.php
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: placeorder.php');
    exit;
}

/* 
Calculate the total of all items in cart 
*/
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
if ($products_in_cart) {
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id IN (' . $array_to_question_marks . ')');
    $stmt->execute(array_keys($products_in_cart));
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($products as $product) {
        $subtotal += (float) $product['price'] * (int) $products_in_cart[$product['id']];
    }
}
?>

<?= template_header('Cart') ?>

<div class="cart">
    <div class="return-button">
        <button class="coffee" id="neu-button">
            <a href="products.php"><i class="fas fa-coffee"></i></a>
        </button>
        <h3>Shopping Cart</h3>
        <button class="search" id="neu-button">
                <input type="text" id="myInput" onkeyup="searchProduct()" placeholder="Search">

        </button>
    </div>
    <form action="cart.php" method="post" class="cart-list">
        <div>
            <?php if (empty($products)): ?>
                <h3>
                    You have no products added in your Shopping Cart
                </h3>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div class="frame cart-frame" id="<?= $product['id'] ?>">
                        <div class="cart-description">
                            <a href="product.php?id=<?= $product['id'] ?>">
                                <img src="<?= $product['img'] ?>" height="300" width="300" alt="<?= $product['name'] ?>">
                            </a>
                            <div class="cart-info">
                                <a class="name" href="product.php?id=<?= $product['id'] ?>">
                                    <?= $product['name'] ?>
                                </a>

                                <br>
                                <span class="price">RM <?= $product['price'] ?></td>
                                    <span class="quantity">
                                        <br>
                                        <span class="price total">RM <?= $product['price'] * $products_in_cart[$product['id']] ?></span>
                                        <br>
                                        <button onclick="decrement()" class="cart-button" type="button" id="neu-button"><i class="fas fa-minus"></i></button>
                                        <input class="cart-button" id="quantity" type="number" name="quantity-<?= $product['id'] ?>"
                                        value="<?= $products_in_cart[$product['id']] ?>" min="1"
                                        max="<?= $product['quantity'] ?>" placeholder="1" required>
                                        <button onclick="increment()" class="cart-button" type="button" id="neu-button"><i class="fas fa-plus"></i></button>
                                    </span>
                                    <br>
                                    <input id="update-button" type="submit" value="Update" name="update">
                                    <br>
                                    <li id="remove-button">
                                        <a href="cart.php?remove=<?= $product['id'] ?>" class="remove">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </li>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <div class="subtotal">
            <span class="price subtotal"> RM <?= $subtotal ?></span>
            <div class="buttons">
                <input id="checkout" type="submit" value="Checkout" name="placeorder">
            </div>
        </div>
    </form>
</div>

<?= template_footer() ?>
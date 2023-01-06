<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopping_cart";


//Creating connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//Database query to insert data
$sql = "INSERT INTO `products` (`id`, `name`, `type`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Mexican Mocha', 'cold', '<p>The Mexican Mocha is a great option for cold days because it takes the sweet taste of a hot mocha latte and kicks it up a notch.</p><h3>Ingredients</h3><ul><li>6-8 oz milk</li><li>¼ tablet of Abuelita</li><li>1-2 oz espresso</li></ul>', '29.99', '0.00', 10, '../assets/products/mexican-mocha.png', '2019-03-13 17:55:22'),
(2, 'Red Eye', 'cold', '<p>Red eye coffee is a coffee drink that combines drip coffee with one or two shots of espresso. The name likely refers to taking a red eye flight, an airline flight thats overnight, causing the passengers to have tired red eyes</p><h3>Ingredients</h3><ul><li>2 shots of espresso</li></ul>', '14.99', '19.99', 34, '../assets/products/red-eye.png', '2019-03-13 18:52:49'),
(3, 'Caramel Flat White', 'cold',  '<p>A flat white falls somewhere between a latte and a cappuccino in terms of flavor. Its a nice combination of espresso and steamed milk and, in this case, tied together with a hint of caramel.</p><h3>Ingredients</h3><ul><li>4 oz milk</li><li>1 oz caramel syrup to taste</li><li>2 oz espresso</li></ul>', '19.99', '0.00', 23, '../assets/products/caramel-flat-white.png', '2019-03-13 18:47:56'),
(4, 'Coffee Protein Shake', 'energy' ,'<p>This coffee protein shake recipe by Love and Zest has four simple ingredients you can prep ahead of time and blend in the morning for a quick and easy breakfast to put an extra spring in your step. It contains bananas, protein powder, almond milk, and coffee.</p><h3>Ingredients</h3><ul><li>Banana</li><li>Vanilla protein powder</li><li>Unsweetened vanilla almond milk</li><li>Cold brewed coffee</li><li>Cacao nibs</li></ul>', '69.99', '0.00', 7, '../assets/products/coffee-protein-shake.png', '2019-03-13 17:42:04'),
(5, 'Peanut Butter Coffee', 'energy' ,'<p>The peanut butter coffee combines some creamy peanut butter with delicious rich coffee flavors and some creamy milk to supply you with the much needed energy</p><h3>Ingredients</h3><ul><li>2 shots espresso</li><li>1 tablespoon natural peanut butter</li><li>½ cup oat milk or other milk of choice</li><li>2 tablespoon maple syrup</li></ul>', '69.99', '0.00', 7, '../assets/products/peanut-butter-coffee.png', '2019-03-13 17:42:04'),
(6, 'Bullet Proof Coffee', 'energy' ,'<p>Bulletproof coffee is huge in the Keto Diet community, but it actually has benefits for everyone regardless of whether you’re on a low-carb diet.Adding healthy fats balances the caffeine in the coffee and gives you a combined boost of energy, improves digestive health, and may help you feel more alert and mentally sharp. </p><h3>Ingredients</h3><ul><li>1 ½ - 2 cups hot, freshly brewed coffee</li><li> 1 tbsp coconut oil</li><li>2 tbsp cocoa butter</li></ul>', '69.99', '0.00', 7, '../assets/products/bulletproof-coffee.png', '2019-03-13 17:42:04'),
(7, 'Dalgona Coffee', 'recent' ,'<p>Dalgona though whipped coffee has recently become trendy because of a viral TikTok video, this particular easy-to-make coffee drink has been a staple in southern Asia for quite some time. Also known as whipped coffee, or beaten coffee, dalgona is surprisingly easy to make.</p><h3>Ingredients</h3><ul><li> 2 Tbsp instant coffee</li><li>2 Tbsp sugar </li><li>2 tbsp cocoa butter</li></ul>', '69.99', '0.00', 7, '../assets/products/dalgona-coffee.png', '2019-03-13 17:42:04'),
(8, 'Almond Milk Latte', 'recent' ,'<p>Recent years have shown an increase in popularity of the non-dairy alternative. One of the most popular dairy milk substitutes is almond milk. It is a healthy way to get your dairy fix without all the downsides of traditional milk. One of the best ways to drink this substitute is in coffee, and an almond milk latte is a great place to start.</p><h3>Ingredients</h3><ul><li>2 shots espresso</li><li>1 cup almond milk</li><li>1 regular tea bag</li></ul>', '69.99', '0.00', 7, '../assets/products/almond-milk-latte.png', '2019-03-13 17:42:04'),
(9, 'Caramel Machiatto', 'recent' ,'<p>Caramel Macchiato is an espresso-based beverage sold in Starbucks. It is made with vanilla syrup, steamed milk, espresso, and caramel sauce. The espresso is poured on top of the milk leaving a dark mark on top of the milk foam. Caramel sauce is poured on top of the foam, adding a layer of sweetness. Caramel Macchiato is one of the most popular Starbucks drinks.</p><h3>Ingredients</h3><ul><li>1 cup brown sugar</li><li>2 Tbsp butter</li><li>Pinch of salt</li><li>Pinch of salt</li><li>Caramel sauce</li><li>1 cup espresso</li></ul>', '69.99', '0.00', 7, '../assets/products/caramel-machiatto.png', '2019-03-13 17:42:04'),
(10, 'Cinammon Latte', 'recent' ,'<p>A cinnamon dolce latte is a drink made with espresso, milk, and a sweet cinnamon syrup.  Typically, the latte typically consists of household ingredients – water, brown sugar, white sugar, cinnamon, and vanilla extract.</p><h3>Ingredients</h3><ul><li>400 ml 13.5 fl oz brewed black coffee</li><li>1 tsp cinnamon, ground</li><li>Pinch of salt</li><li>2 Tbsp sugar</li><li>1 liter milk</li></ul>', '69.99', '0.00', 7, '../assets/products/cinammon-latte.png', '2019-03-13 17:42:04')";

if (mysqli_query($conn, $sql)) {
    echo "Products successfully inserted!";
} else {
    echo "Error insert data: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
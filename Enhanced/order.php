<?php
include("session.php")
?>
include 'session.php';

// Calculate the total price of items in the cart
$totalPrice = 0.00;
if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['price'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Order - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <header class="header">
<?php include 'header.php';?>
    </header>

    <section class="order">
	
        <h1 class="heading"> order <span>summary</span> </h1>
		
		<?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
            <div class="order-list">
                <?php foreach ($_SESSION['cart'] as $item) { ?>
                    <div class="order-item">
                        <h3><?php echo $item['product_name']; ?></h3>
                        <div class="price">RM<?php echo $item['price']; ?></div>
                    </div>
                <?php } ?>
            </div>

            <div class="price">
                <h3>Total: RM<?php echo number_format($totalPrice, 2); ?></h3>
            </div>

            <form method="POST" action="checkout.php">
                <button type="submit" class="btn">Proceed to Checkout</button>
            </form>
			<form method="POST" action="clear_cart.php">
			<button type="submit" class="clear-cart-btn">Clear Cart</button>
			</form>
			
        <?php } else { ?>
		<div class="price">
            <h3>Your cart is empty.</h3>
		</div>
        <?php } ?>


</body>
</html>
</body>
</html>
<?php
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
		
		<!-- loop to print cart items --!>
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

			<?php
			
		// Retrieve the stored CSRF token from the session
		$storedCsrfToken = $_SESSION['csrf_token'] ?? '';

		// Retrieve the submitted CSRF token from the request
		$submittedCsrfToken = $_POST['csrf_token'] ?? '';

		// Compare the stored and submitted CSRF tokens
		if (!hash_equals($storedCsrfToken, $submittedCsrfToken)) {
			// CSRF token mismatch, display an error message
			$errorMessage = "Invalid CSRF token. Please try again.";
		} else {
			// CSRF token is valid, set the href attribute for the link
			$linkHref = "https://api.whatsapp.com/send?phone=601135221347";
		}
		?>

		<a href="<?php echo isset($linkHref) ? $linkHref : '#'; ?>" class="btn"><?php echo isset($errorMessage) ? $errorMessage : 'Send Receipt'; ?></a>

			<form method="POST" action="/clear_cart">
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
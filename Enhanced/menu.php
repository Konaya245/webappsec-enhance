<?php
include 'session.php';

//$_SESSION['email'] = 'ali@gmail.com'; 

// Check if the user is a guest or user
function isGuest()
{
    return !isset($_SESSION['email']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_name']) && isset($_POST['price'])) {
    // Get the product details from the form
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
	
	if (isGuest()) {
        echo "Guest users are not allowed to add items to the cart.";
        exit; // Stop further execution if the user is a guest
    }

    // Create an array to store the product details
    $product = array(
        'product_name' => $product_name,
        'price' => $price,
    );

    // Check if the cart exists in the session, create it if it doesn't
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    $_SESSION['cart'][] = $product;
} ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Menu - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <header class="header">
<?php include 'header.php';?>
    </header>
    
    <section class="menu" id="menu">
        
        <h1 class="heading"> our <span>food</span> </h1>
    
        <div class="box-container">
			<form method="POST">
            <div class="box">
                <img src="images/kaya_toast.jpg" alt="">
                <h3>CLASSIC KAYA TOAST</h3>
                <div class="price">RM2.50</div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="CLASSIC KAYA TOAST">
					<input type="hidden" name="price" value="2.50">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/tuna_cheese.jpg" alt="">
                <h3>TUNA CHEESE TOAST</h3>
                <div class="price">RM4.00</div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="TUNA CHEESE TOAST">
					<input type="hidden" name="price" value="4.00">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/cheese_toast.jpg" alt="">
                <h3>CHEESE TOAST</h3>
                <div class="price">RM3.00 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="CHEESE TOAST">
					<input type="hidden" name="price" value="3.00">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/tuna_toast.jpg" alt="">
                <h3>TUNA TOAST</h3>
                <div class="price">RM3.00</div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="TUNA TOAST">
					<input type="hidden" name="price" value="3.00">
                    <button type="submit" class="btn" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
    
			<form method="POST">
            <div class="box">
                <img src="images/maggi.jpg" alt="">
                <h3>MAGGI CUP</h3>
                <div class="price">RM2.50 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="MAGGI CUP">
					<input type="hidden" name="price" value="2.50">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/samyang.jpg" alt="">
                <h3>SAMYANG ORIGINAL</h3>
                <div class="price">RM7.50 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="SAMYANG ORIGINAL">
					<input type="hidden" name="price" value="7.50">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/samyang-2x.jpg" alt="">
                <h3>SAMYANG 2X SPICY</h3>
                <div class="price">RM7.50 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_name" value="SAMYANG 2X SPICY">
					<input type="hidden" name="price" value="7.50">
                    <button type="submit" class="btn">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
    
        </div>
    </section>

        <section class="products" id="products">

            <h1 class="heading"> our <span>beverages</span> </h1>
        
            <div class="box-container">
			
				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/kopi_gantung.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>KOPI GANTUNG PERLIS</h3><br>
                        <div class="price">RM7.00</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="KOPI GANTUNG PERLIS">
						<input type="hidden" name="price" value="7.00">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
				
				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/barbican.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>BARBICAN</h3><br>
                        <div class="price">RM3.50</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="BARBICAN">
						<input type="hidden" name="price" value="3.50">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
				
				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/carbonated.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>CARBONATED DRINKS</h3><br>
                        <div class="price">RM2.50</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="CARBONATED DRINKS">
						<input type="hidden" name="price" value="2.50">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>

				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/air-kotak.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>BOXED DRINKS</h3><br>
                        <div class="price">RM1.50</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="BOXED DRINKS">
						<input type="hidden" name="price" value="RM1.50">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
				
				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/milk.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>MILK CARTON</h3><br>
                        <div class="price">RM2.50</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="MILK CARTON">
						<input type="hidden" name="price" value="RM2.50">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
            </div>
        </section>

        <section class="products" id="products">

            <h1 class="heading"> <span>others</span> </h1>
        
            <div class="box-container">
				<form method="POST">
                <div class="box">
                    <div class="image">
                        <img src="images/aiskrim_malaysia.jpeg" alt="">
                    </div>
                    <div class="content">
                        <h3>AISKRIM MALAYSIA</h3><br>
                        <div class="price">RM1.50</div><br>
                    </div>
					<?php if (!isGuest()) { ?>
						<input type="hidden" name="product_name" value="AISKRIM MALAYSIA">
						<input type="hidden" name="price" value="RM1.50">
						<button type="submit" class="btn">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
            </div>
        </section>
		
    </section>
</body>
</html>
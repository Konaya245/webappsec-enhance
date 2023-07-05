<?php
session_start();

//placeholder $_SESSION['user_id'] = '1';

// Check if the user is a guest or user
function isGuest()
{
    return !isset($_SESSION['user_id']);
}

// Function to add an item to the cart
function addToCart($productId)
{
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    $_SESSION['cart'][] = $productId;
}

// Handle adding items to the cart
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];
    if (!isGuest()) {
        addToCart($productId);
    } else {
        echo "Guest users are not allowed to add items to the cart.";
    }
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

        <a href="home.html" class="logo">
            <img src="images/logo.png">
        </a>
    
<?php include 'header.html';?>
    
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
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/tuna_cheese.jpg" alt="">
                <h3>TUNA CHEESE TOAST</h3>
                <div class="price">RM4.00</div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/cheese_toast.jpg" alt="">
                <h3>CHEESE TOAST</h3>
                <div class="price">RM3.00 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
			
			<form method="POST">
            <div class="box">
                <img src="images/tuna_toast.jpg" alt="">
                <h3>TUNA TOAST</h3>
                <div class="price">RM3.00</div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
    
			<form method="POST">
            <div class="box">
                <img src="images/maggi.jpg" alt="">
                <h3>MAGGI CUP</h3>
                <div class="price">RM2.50 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
                <?php } ?>
            </div>
			</form>
    
            <div class="box">
                <img src="images/samyang.jpg" alt="">
                <h3>SAMYANG ORIGINAL</h3>
                <div class="price">RM7.50 </div>
            </div>

			<form method="POST">
            <div class="box">
                <img src="images/samyang-2x.jpg" alt="">
                <h3>SAMYANG 2X SPICY</h3>
                <div class="price">RM7.50 </div>
				<?php if (!isGuest()) { ?>
                    <input type="hidden" name="product_id" value="1">
                    <button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
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
						<input type="hidden" name="product_id" value="1">
						<button type="submit">Add to Cart</button>
					<?php } ?>
                </div>
				</form>
            </div>
        </section>
    
    </section>
</body>
</html>
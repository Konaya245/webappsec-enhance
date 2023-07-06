<!-- ?php include 'session.php'; breaks header layout-->
<!DOCTYPE html>
<html>
<a href="home.php" class="logo">
    <img src="images/logo.png">
</a>
<nav class="navbar">
    <a href="home.php">home</a>
    <a href="menu.php">menu</a>
    <a href="order.php">order</a>
    <a href="review.php">review</a>
    <a href="about.php">about us</a>
    <a href="login.php">my account</a>
	<?php if(!isset($_SESSION["email"])) { // doesn't hide ?>
        <a href="logout.php">log out</a>
    <?php } ?>
</nav>

</html>
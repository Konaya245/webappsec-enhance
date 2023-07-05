<?php
session_start();

unset($_SESSION['cart']);

// Redirect back to the order.php page
header("Location: order.php");
exit;
?>

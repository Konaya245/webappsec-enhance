<?php
include 'session.php';

unset($_SESSION['cart']);

// Redirect back to the order.php page
header("Location: /order");
exit;
?>

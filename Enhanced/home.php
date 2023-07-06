<?php
	include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
    <script src="js/script.js"></script>
</head>

<body>
    <header class="header">

<?php include 'header.php';?>

</header>

<section class="home" id="home">

    <div class="content">
        <h3>Welcome to Chillax Cafe</h3>
        <p>Your grab and go station</p>
        <p>now open in IIUM gombak!</p>
        <a href="menu.php" class="btn">order now</a>
    </div>

</section>

<section>
    <h1 class="heading"> <span>promotion</span></h1>
<div style="text-align:center;">
<button class="btn" id="promoBtn" onclick="revealMessage()">Click Me</button>
    <div style="padding-top:20px;" class="row">
        <div>
            <p id="hiddenMessage" style="display:none;">
            <img width="30%" height="100%" src="images/kopi-gantung-pic.jpg" alt="">
            <img width="30%" height="100%" src="images/vietnamese-role.jpg" alt="">
            <img width="30%" height="100%" src="images/promotion.jpg" alt="">
            </p>
        </div>
    </div>
</div>

</section>
    
</body>
</html>
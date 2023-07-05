<?php
	session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About Us - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <header class="header">

<?php include 'header.html';?>
    
    </header>

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>
    
        <div class="row">
    
            <div class="image">
                <img src="images/about-img.jpeg" alt="">
            </div>
    
            <div class="content">
                <h3>what makes our cafe special?</h3>
                <p>The Chillax Cafe can be found close to the Riverside and just across from the Pos Malaysia office, which is next to the Admin Building. We provide many different kinds of cuisine, such as nasi lemak, beverages, and our signature item, toast, 
                    which comes in a variety of flavours and fillings, such as cheese toast, kaya toast, and tuna toast. We also provide the trendy beverage known as Kopi Gantung Perlis, which costs only RM 6 per cup. You have the option of eating in the cafe 
                    or taking your food to go. Please come in and bring your loved ones and friends with you.</p>
                <a href="https://instagram.com/chillax_cafe22?igshid=YmMyMTA2M2Y=" class="btn">follow us on instagram</a>
            </div> 
    
        </div>
    
    </section>
    
    <section class="about">

        <div class="row">
            <video style="margin-left: auto; margin-right: auto;" width="25%" height="100%" controls>
                <source src="images/about.mp4" type="video/mp4">
            </video>
            <video style="margin-left: auto; margin-right: auto;" width="25%" height="100%" controls>
                <source src="images/promo.mp4" type="video/mp4">
            </video>
            <video style="margin-left: auto; margin-right: auto;" width="24.3%" height="100%" controls>
                <source src="images/kopi-gantung.mp4" type="video/mp4">
            </video>
        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>
    
        <div class="row">
    
            <iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Chillax%20Cafe%20IIUM,%20Administration%20Building,%20Al-Ghazali%20Road,%2053100%20Kuala%20Lumpur+(Chillax%20Cafe%20IIUM)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/wearable-gps/" allowfullscreen="" loading="lazy"></iframe>
    
            <form action="">
                <br><br><br><br>
                <h3>get in touch</h3>
                <br><br><br><br><br><br><br>
                <a href="https://api.whatsapp.com/send?phone=601135221347" class="btn">contact now</a>
                <br><br><br><br>
            </form>
    
        </div>
    
    </section>
    
</body>
</html>
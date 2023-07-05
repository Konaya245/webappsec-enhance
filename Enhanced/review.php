<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Review - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>
    <header class="header">

<?php include 'header.html';?>

    </header>
    
    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>
    
        <div class="box-container">
            
            <?php
                // Fetch reviews from the database and display them
                $connection = mysqli_connect("localhost:3307", "hamsa","webappsec", "webappsec");
                if ($connection) {
                    $query = "SELECT * FROM reviews";
                    $result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='box'>";
                    echo "<h3>From: " . $row['name'] . "</h3>";
                    echo "<p>on " . $row['time'] . "</p><hr>";
                    echo "<p><b>Rating:</b> " . $row['rating'] . "/5</p>";
                    echo "<p><b>Review:</b> " . $row['review'] . "</p>";
                    echo "</div>";
                    }

                    mysqli_close($connection);
                }
            ?>
        </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading"> submit <span>review</span> </h1>   
        <div class="box-container">
            <div class="box">
            <form id="review-form" action="reviewsubmit.php" method="post">
                <label for="name">Name:     </label>
                <input type="text" id="name" name="name" style="max-width : 450px;" pattern="[a-zA-Z']+" required></br></br>

                <label for="rating">Rating:     </label>
                <input type="number" id="rating" name="rating" min="1" max="5" required></br></br>

                <label for="review">Review: </label></br>
                <textarea id="review" name="review" style="max-width : 450px;" required></textarea></br></br>

                </br></br><button type="submit">Submit</button>
            </form>
            </div>  
        </div>
        <!-- <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>I love Kaya Toast and Tuna Cheesy Toast. These are my fav</p>
                <img src="images/profile-pic.png" class="user" alt="">
                <h3>Fatin Natrah</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="box">
                <img src="images/quote-img.png" alt="" class="quote">
                <p>The viral kopi gantung is superb! will surely come again later</p>
                <img src="images/profile-pic-2.png" class="user" alt="">
                <h3>Hazim Zaharuddin</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div> --> 
    </section>
    
</body>
</html>
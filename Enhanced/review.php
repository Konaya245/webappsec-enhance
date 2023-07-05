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

        <a href="home.html" class="logo">
            <img src="images/logo.png">
        </a>
    
        <nav class="navbar">
            <a href="home.html">home</a>
            <a href="menu.html">menu</a>
            <a href="order.html">order</a>
            <a href="review.html">review</a>
            <a href="about.html">about us</a>
        </nav>
    
    </header>
    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>
    
        <div class="box-container">
            
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
            <div class="box">
            <form id="review-form" action="reviewsubmit.php" method="post">
                <label for="name">Name:     </label>
                <input type="text" id="name" name="name" style="max-width : 450px;" required></br></br>

                <label for="rating">Rating:     </label>
                <input type="number" id="rating" name="rating" min="1" max="5" required></br></br>

                <label for="review">Review: </label></br>
                <textarea id="review" name="review" required></textarea></br></br>

                </br></br><button type="submit">Submit</button>
            </form>
            </div>
    
        </div>
    
    </section>

    <centre>

    <h2>Product Reviews</h2>
    <div class="box-container">
    <div class="box">
    <?php
      // Fetch reviews from the database and display them
      $connection = mysqli_connect("localhost", "root", "", "review");
      if ($connection) {
        $query = "SELECT * FROM reviews";
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div>";
          echo "<h3>" . $row['name'] . "</h3>";
          echo "<p>Rating: " . $row['rating'] . "/5</p>";
          echo "<p>" . $row['review'] . "</p>";
          echo "</div>";
        }

        mysqli_close($connection);
      }
    ?>
  </div></div></centre>
    
</body>
</html>
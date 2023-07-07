<?php
include 'session.php';
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

<?php include 'header.php';?>

    </header>
    
    <section class="review" id="review">

        <h1 class="heading"> customer's <span>review</span> </h1>
    
        <div class="box-container">
            
            <?php
                // Fetch reviews from the database and display them
                $connection = mysqli_connect("localhost", "root","", "review");
                // $connection = mysqli_connect("localhost:3307", "hamsa","webappsec", "webappsec");
                if ($connection) {
                    $query = "SELECT * FROM reviews";
                    $result = mysqli_query($connection, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='box'>";
                    echo "<h3>From: " . $row['name'] . "</h3>";
                    echo "<p>on " . $row['time'] . "</p><hr>";
                    echo "<p><b>Rating:</b> " . $row['rating'] . "/5</p>";
                    echo "<p style='word-wrap: break-word; word-break: break-all;'><b>Review:</b> " . $row['review'] . "</p>";
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
                <label for="name" class="label1">Name:     </label>
                <input type="text" id="name" name="name" style="max-width: 450px;" pattern="[a-zA-Z']+" required></br></br>

                <label class="label1" for="rating">Rating:     </label>
                <input type="number" id="rating" name="rating" min="1" max="5" style="max-width : 50px;" required></br></br>

                <label class="label1" for="review">Review: </label></br>
                <input type="text" id="review" name="review" style="max-width: 100%;" pattern="[a-zA-Z0-9\s!\&?,.]*" required></br></br>
                <!-- <textarea id="review" name="review" style="max-width : 450px;" required></textarea></br></br> -->

                </br></br><button onclick="Validate()" class="review-button">Submit</button>

                <!-- <script>
                    var usernamecheck = /^[A-Za-z0-9]{5,1000}\.[A-Za-z0-9]{5,1000}$/;

                    function Validate()
                    {
                        var val = document.getElementById('review').value;
                        var lines = val.split('\n');

                        for(var i = 0; i < lines.length; i++)
                        {
                        if(!lines[i].match(usernamecheck))
                        {
                            alert ('Invalid input: ' + lines[i] + '.  Please write the usernames in the correct format (with a full stop between first and last name).');
                            return false;
                        } 
                        }

                        window.alert('Everything looks good!');
                    }
                </script> -->

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
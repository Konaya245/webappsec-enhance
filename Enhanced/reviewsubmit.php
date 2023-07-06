<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
    // if (preg_match("/^[a-zA-Z']+$/", $name)) {
    //     // Valid input containing only alphabetic characters
    // } else {
    //     // Invalid input - contains non-alphabetic characters
    // }  
  $rating = $_POST['rating'];
  $review = $_POST['review'];

  // Validate and sanitize the input here if needed

  // Save the review to the database
  $connection = mysqli_connect("localhost:3307", "hamsa","webappsec", "webappsec");
  if ($connection) {
    $query = "INSERT INTO reviews (name, rating, review) VALUES ('$name', '$rating', '$review')";
    $result = mysqli_query($connection, $query);

    if ($result) {
      // Redirect back to the index page after successful submission
      header("Location: review.php");
      exit();
    }

    mysqli_close($connection);
  }

  // Display an error message if the submission fails
  echo "Failed to submit the review.";
}
?>
<?php

// Define error messages
$errors = array();
$nameError = "";
$reviewError = "";

// Validate and sanitize the input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z']+$/", $name)) {
        $nameError = "Please enter a valid name (only letters and spaces allowed)";
        array_push($errors, $nameError);
    }
  $rating = $_POST['rating'];
  $review = $_POST['review'];
    if (!preg_match("/^[a-zA-Z0-9\s!\&?,.]*$/", $review)) {
      $nameError = "Please enter a valid input (only letters, numbers, spaces and symbols (& ? , .) allowed)";
      array_push($errors, $reviewError);
    }

  // Save the review to the database
  if (count($errors) == 0) {
    $connection = mysqli_connect("localhost", "root","", "review");
    // $connection = mysqli_connect("localhost:3307", "hamsa","webappsec", "webappsec");
    if ($connection) {
      $query = "INSERT INTO reviews (name, rating, review) VALUES ('$name', '$rating', '$review')";
      $result = mysqli_query($connection, $query);

    if ($result) {
      // Redirect back to the index page after successful submission
      header("Location: /review");
      exit();

    }
	
	mysqli_close($connection);

    // Display an error message if the submission fails
    echo "Failed to submit the review.";
  }
  else {
    echo "<h2>Errors:</h2>";
    foreach ($errors as $error) {
      echo "<p>" . $error . "</p>";
    }
  }
}

// Display errors when there are error(s)
if (count($errors) != 0) {
  echo "<h2>Errors:</h2>";
  foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
  }
}
?>
<?php

// Define error messages
$errors = array();
$nameError = "";
$reviewError = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['name'];
    if (!preg_match("/^[a-zA-Z']+$/", $name)) {
        $nameError = "Please enter a valid name (only letters and spaces allowed)";
        array_push($errors, $nameError);
    }
  $rating = $_POST['rating'];
  $review = $_POST['review'];
    // if (!preg_match("/^[a-zA-Z0-9\s!\?,.]*$/", $paragraph)) {
    //   $nameError = "Please enter a valid name (only letters and spaces allowed)";
    //   array_push($errors, $reviewError);
    // }

  // Validate and sanitize the input here if needed

  // Save the review to the database
  if (count($errors) == 0) {
    $connection = mysqli_connect("localhost", "root","", "review");
    // $connection = mysqli_connect("localhost:3307", "hamsa","webappsec", "webappsec");
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
  else {
    echo "<h2>Errors:</h2>";
    foreach ($errors as $error) {
      echo "<p>" . $error . "</p>";
    }
  }
}

// If there are no errors, display the input values
if (count($errors) == 0) {
  echo "<h2>Student Details</h2>";
  echo "<p><strong>Name:</strong> " . $_POST["name"] . "</p>";
  echo "<p><strong>Matric No:</strong> " . $_POST["matricno"] . "</p>";
  echo "<p><strong>Current Address:</strong> " . $_POST["currentaddress"] . "</p>";
  echo "<p><strong>Home Address:</strong> " . $_POST["homeaddress"] . "</p>";
  echo "<p><strong>Email:</strong> " . $_POST["email"] . "</p>";
  echo "<p><strong>Mobile Phone No:</strong> " . $_POST["mobilephone"] . "</p>";
  echo "<p><strong>Home Phone No:</strong> " . $_POST["homephone"] . "</p>";
}
// Otherwise, display the error messages
else {
  echo "<h2>Errors:</h2>";
  foreach ($errors as $error) {
    echo "<p>" . $error . "</p>";
  }
}
?>
<?php
	include 'session.php';      
    include('db.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select email, password from register where email = '$email' and password = '" . sha1($password) . "'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo include 'menu.php';
			$_SESSION['email'] = $email;
			
			// Generate a random session ID
			$randomValue = random_bytes(32); // Cryptographic random value
			$generatedSessionID = bin2hex($randomValue); // Convert the random bytes to a hexadecimal string

			// Set the session ID
			session_id($generatedSessionID);
			
			// Create the CSRF Token
			$secret = getenv("CSRF_SECRET"); // HMAC secret key
			$sessionID = session_id(); // prev generated user session ID
			$randomValue2 = bin2hex(random_bytes(64)); // Cryptographic random value
			$message = $sessionID . "!" . $randomValue2; // HMAC message payload
			$hmac = hash_hmac("sha256", $message, $secret); // Generate the HMAC hash
			$csrfToken = $hmac . "." . $message; // Combine HMAC hash with message to generate the token

			// Store the CSRF Token in a cookie
			setcookie("csrf_token", $csrfToken, 0, "/", "", true, true); // Set cookie with secure and HttpOnly flags
        }  
        else{  
             echo "<h1> Login failed. Please try again!</h1>";  
            
               
        }

        
?>  

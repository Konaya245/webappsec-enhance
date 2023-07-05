<?php
	$emailError ="";
    $passwordError ="";
    $firstnameError ="";
	$lastnameError ="";
	$mobilenoError ="";

   $email ="";
    $password ="";
    $firstname ="";
	$lastname ="";
	$mobileno =""; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
         //Email Validation   
         if (empty($_POST["email"])) {  
            $emailError = "Email is required";  
        } else {  
            $email = input_data($_POST["email"]);  
            // check that the e-mail address is well-formed  
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                $emailError = "Invalid email format";  
            }  
        } 

        if (empty($_POST["password"])) {  
            $passwordError = "Password is required";  
        } else {  
            $password = input_data($_POST["password"]);  
            // check that the password address is well-formed  
            if (!preg_match("/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[*.!@?]).{12,16}$/",$password)) {  
                $passwordError = "Invalid password format (At least one digit, one lowercase character, one uppercase character, one special character, and
                12 characters in length, but no more than 16.";  
            }  
        } 

        //String Validation  
            if (empty($_POST["firstname"])) {  
                 $firstnameError = "First name is required";  
            } else {  
                $firstname = input_data($_POST["firstname"]);  
                    // check if firstname only contains letters and whitespace  
                    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {  
                        $firstnameError = "Only alphabets and white space are allowed";  
                    }  
            }
            
            if (empty($_POST["lastname"])) {  
                $lastnameError = "Last name is required";  
           } else {  
               $lastname = input_data($_POST["lastname"]);  
                   // check if lastname only contains letters and whitespace  
                   if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {  
                       $lastnameError = "Only alphabets and white space are allowed";  
                   }  
           }  
              
                  
            //Number Validation  
            if (empty($_POST["mobileno"])) {  
                    $mobilenoError = "Mobile phone number is required";  
            } else {  
                    $mobileno = input_data($_POST["mobileno"]);  
                    // check if mobile no is well-formed  
                    if (!preg_match ("/^[0-9]*$/", $mobileno) ) {  
                    $mobilenoError = "Only numeric value is allowed.";  
                    }  
                //check mobile no length should not be less and greator than 10  
                if (strlen ($mobileno) != 10 && 11) {  
                    $mobilenoError = "Mobile phone number must contain 10/11 digits.";  
                    }  
            }              
        }  

        function input_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .error {
            color: #FF0000;
        }
    </style>

</head>

<body>

<?php
    include('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email']) && $email != "" && $password != "" && $firstname != "" && $lastname != "" && $mobileno != "" &&
    $emailError == "" && $passwordError == "" && $firstnameError == "" && $lastnameError == "" && $mobilenoError == "") {
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // removes backslashes
        $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
        $firstname = mysqli_real_escape_string($con, $firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        //escapes special characters in a string
        $lastname = mysqli_real_escape_string($con, $lastname);
        
        $mobileno = stripslashes($_REQUEST['mobileno']);
        $mobileno = mysqli_real_escape_string($con, $mobileno);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `register` (email, password, firstname, lastname, mobileno, create_datetime)
                     VALUES ('$email', '" . sha1($password) . "', '$firstname', '$lastname', '$mobileno', '$create_datetime')";
         $result   = mysqli_query($con, $query);
        
         $duplicate=mysqli_query($con,"select * from register where email='$email'");
         if (mysqli_num_rows($duplicate)>0)
         {
            echo "<h1> Email already exists.</h1>";  
         }
        
        
        }
    //     if ($result) {
    //         echo "<div class='form'>
    //               <h3>You are registered successfully.</h3><br/>
    //               <p class='link'>Click here to <a href='login.php'>Login</a></p>
    //               </div>";
    //     // } else {
    //     //     echo "<div class='form'>
    //     //           <h3>Required fields are missing.</h3><br/>
    //     //           <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
    //     //           </div>";
    //     // }
    // }} else {
?>


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
            <a href="login.php">my account</a>
        </nav>
    
    </header>
    <section class="register" id="register">

        <h1 class="heading"> new <span>account</span> </h1>

        <div class="float-container">

            <div class="row">

                <div class="column" style="background-color:#aaa; font-size: 20px">

                <form class="form" method="POST" name="register" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1 class="register-title" style="font-size:60px;">Register</h1><br> 
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" placeholder="Email">
                    <span class="error"> <?php echo $emailError; ?> </span>
                    <br><br>
                    <label for="password"><b>Password</b></label>
                    <input type="password" name="password" placeholder="Password" title="Follow the correct format.">
                    <span class="error"> <?php echo $passwordError; ?> </span>
                    <br><br>
                    <label for="firstname"><b>First Name</b></label>
                    <input type="text" name="firstname" placeholder="First Name" title="No numbers and any special characters" pattern="^[a-zA-Z ]*$">
                    <span class="error"> <?php echo $firstnameError; ?> </span>
                    <br><br> 
                    <label for="lastname"><b>Last Name</b></label>
                    <input type="text" name="lastname" placeholder="Last Name" title="No numbers and any special characters" pattern="^[a-zA-Z ]*$">
                    <span class="error"> <?php echo $lastnameError; ?> </span>
                    <br><br>
                    <label for="mobileno"><b>Mobile Phone No</b></label> 
                    <input type="tel" id="mobileno" name="mobileno" placeholder="Mobile Phone No" title="No alphabet and any special characters. The length is 10/11 digits only">
                    <span class="error"> <?php echo $mobilenoError; ?> </span>
                    <br><br><br> 
                    <button type="submit" value="Register" name="submit" class="register-button">Register<br>
                   
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">
        
                </form>
                         
                

            </div> 
            </div>
            <br><br>

             <?php
                if(isset($_POST['submit'])) {  
                if($emailError == "" && $passwordError == "" && $firstnameError == "" && $lastnameError == "" && $mobilenoError == "") {  
                 echo "<h3> <font color=#FFFFFF size='10pt'> <b>You have sucessfully registered.</b></font> </h3>";   
          
                } else {  
                echo "<h3> <font color=#FFFFFF size='10pt'> <b>You didn't filled up the form correctly.</b></font> </h3>";  
                }  
                }  

                $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_STRING);

                    if (!$token || $token !== $_SESSION['token']) {
                    // return 405 http status code
                    header($_SERVER['SERVER_PROTOCOL'] . ' 405 Method Not Allowed');
                    exit;
                    } else {
                    // process the form
                    }
            ?> 
            

         
    </section>
    
</body>
</html>
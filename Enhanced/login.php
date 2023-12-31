<?php
session_start();
?>

<?php
	include 'session.php';
	$emailError ="";
    $passwordError ="";

   $email ="";
    $password ="";

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
              
        }  

        function input_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Review - Chillax Cafe</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">

    <style>
        .float-container {
    border: 3px solid #fff;
    padding: 20px;
    display: grid;
}

* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;
  /* height: 600px; Should be removed. Only for demonstration */
} 

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
    </style>
</head>

<body>
    <header class="header">
    
<?php include 'header.php';?>
        
        </header>
    <section class="login" id="login">

        <h1 class="heading"> Login </h1>

        <div class="float-container">

            <div class="row">
                <div class="column" style="background-color:#aaa; font-size: 20px">
                <form name="f1" action = "/auth" onsubmit = "return validation()" method = "POST">
            <!-- <h1 class="login-title" style="font-size:60px;">Login</h1><br> -->
            <p>  
                <label> Email: </label>  
                <input type = "email" id ="email" name  = "email" />  
                <span class="error"> <?php echo $emailError; ?> </span>
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
                <span class="error"> <?php echo $passwordError; ?> </span>
            </p>  
            <p>     
            <button type="submit" value="Register" name="submit" class="register-button">Login<br></button>
            </p>  
            
        </form>

        <p>Not registered yet? <a href='/register'>Register Here </a></p>
                </div>
             
         </div>

    </section>
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
       </script>  
</body>
</html>
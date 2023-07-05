<?php      
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
            echo include 'order.html';  
        }  
        else{  
            // echo "<h1> Login failed. Please try again!</h1>";  
            
                $email = input_data($_POST["email"]);  
                // check that the e-mail address is well-formed  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailError = "Invalid email format";  
                }  
            } 
        
?>  

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
    <section class="login" id="login">

        <h1 class="heading"> Login </h1>

        <div class="float-container">

            <div class="row">
                <div class="column" style="background-color:#aaa; font-size: 20px">
                <form name="f1" action = "auth.php" onsubmit = "return validation()" method = "POST">
            <!-- <h1 class="login-title" style="font-size:60px;">Login</h1><br> -->
            <p>  
                <label> Email: </label>  
                <input type = "text" id ="email" name  = "email" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="password" name  = "password" />  
            </p>  
            <p>     
            <button type="submit" value="Register" name="submit" class="register-button">Login<br></button>
            </p>  
            
        </form>

        <p>Not registered yet? <a href='register.php'>Register Here </a></p>
                </div>
             
         </div>

    </section>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
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
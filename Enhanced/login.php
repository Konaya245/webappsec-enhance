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
                <form class="form" method="post" name="login">
            <!-- <h1 class="login-title" style="font-size:60px;">Login</h1><br> -->
            <p>  
                <label> Email: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" style="font-size: 20px" />  
            </p>  
            
        </form>

        <p>Not registered yet? <a href='register.php'>Register Here </a></p>
                </div>
                <!-- <div class="column" style="background-color:#bbb; border-left: 10px solid black; text-align: center;">
                <h2 style="font-size:40px; padding: 100px;">New Customer?</h2><br>
                    <p>Some text..</p>
                </div> -->
            </div>
         </div>

<!--     
        <div class="box-container">
            
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="email" class="login-input" name="email" placeholder="email" autofocus="true"/>
            <input type="password" class="login-input" name="password" placeholder="Password"/>
            <input type="submit" value="Login" name="submit" class="login-button"/>
            <p class="link"><a href="register.php">New Registration</a></p>
        </form>
    
        </div> -->
        
        <!-- <div class="float-container">

            <div class="float-child">
                <div class="green">Float Column 1</div>
            </div>
  
            <div class="float-child">
                <div class="blue">Float Column 2</div>
            </div>
  
        </div> -->
    </section>
    
</body>
</html>
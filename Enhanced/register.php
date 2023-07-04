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
            <a href="myaccount.php">my account</a>
        </nav>
    
    </header>
    <section class="register" id="register">

        <h1 class="heading"> new <span>account</span> </h1>

        <div class="float-container">

            <div class="row">
                <div class="column" style="background-color:#aaa; font-size: 20px">
                <form class="form" method="post" name="login">
            <!-- <h1 class="login-title" style="font-size:60px;">Login</h1><br> -->
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" placeholder="email" autofocus="true"/>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Password"/>
            <label for="firstname"><b>First Name</b></label>
            <input type="text" name="firstname" placeholder="First Name" autofocus="true"/>
            <label for="lastname"><b>Last Name</b></label>
            <input type="text" name="lastname" placeholder="Last Name"/>
            <label for="mobilePhone"><b>Mobile Phone No</b></label>
            <input type="tel" id="mobilePhone" name="mobilePhone" placeholder="Mobile Phone No" title="No alphabet and any special characters" pattern="^[0-9]{10,11}" required>
            <hr>
            <input type="submit" value="Register" name="submit" class="register-button"/><br>
            
        </form>
                </div>
                <!-- <div class="column" style="background-color:#bbb; border-left: 10px solid black; text-align: center;">
                <h2 style="font-size:40px; padding: 100px;">New Customer?</h2><br>
                    <p>Some text..</p>
                </div> -->
            </div>
         </div>

    
        <!-- <div class="box-container">
            
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
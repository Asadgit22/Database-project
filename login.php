<!DOCTYPE html>
<html lang="en">
<head>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css"
    />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login form</title>
    <link rel="stylesheet" href="stylelog.css">
</head>
<body background="graphic.jpeg" class="login-bg">
    <nav>
        <label class="logo"  for=""> Asad Khaleel</label>
        <ul>
            <li><a href="#">Home </a></li>
            <li> <a href="customers.php">Our Customers </a></li>
            <li><a href="login.php" class="btn btn-success"> Logins </a></li>
        </ul>
    </nav>

 

    <center>
        <div  class="form-design">
            <h1 class="title-deg">
                Login Form
            </h1>

            <form class="login-form" action="login_check.php" method="POST">

            <div> 
                <label class="label-deg"  for="">Username</label>
                <input  type="text" name="username">
            </div>
            <div> 
                 <label class="label-deg" for="">Password</label>
                 <input  type="password" name="password">
            </div>
            <div> 
 
                 <input class="btn btn-primary-1" id="submit" type="submit" name="submit" value="login">
                 </div>


            
            </form>
          
        </div>
        </center>

    
</body>
</html>
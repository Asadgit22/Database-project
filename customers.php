
<?php
error_reporting(0);
session_start();



// Your adminhome.php content here


$host = "localhost";
$user = "root";
$password = "";
$db = "aesthetic"; 

$data = mysqli_connect($host, $user, $password, $db);
$sql= "SELECT * FROM userinfodata";

$result=mysqli_query($data,$sql);
?>












<!DOCTYPE html>
<html lang="en">
  <head>


<!-- Latest compiled and minified CSS -->



    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css"
    />

    <title>Asad Khaleel Databse</title>
  </head>
  <body>

  <nav>
        <label class="logo"  for=""> Asad Khaleel</label>
        <ul>
            <li><a href="#">Home </a></li>
            <li> <a href="customers.php">Our Customers </a></li>
        </ul>
    </nav>

    <center>
    <div class="content">
    
    <h1>Our Customers : </h1>
    <br>

    <br>


    <table border="1px">
        <tr>
            <th style="padding:20px; font-size:15px;" >Name</th>
            <th style="padding:20px; font-size:15px;">Email</th>
            <th style="padding:20px; font-size:15px;">Phone No</th>
            <th style="padding:20px; font-size:15px;">Phone MOdel</th>
            <th style="padding:20px; font-size:15px;">OS Version</th>
            <th style="padding:20px; font-size:15px;">Occupation</th>
            
        </tr>

        <?php

           while($info=$result->fetch_assoc())
        {





        ?>
        <tr>
            <td style="padding:20px;">
            <?php echo "{$info['name']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['email']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['phone']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['model']}"; ?>
            
        </td>
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['osversion']}"; ?>
            
        </td>
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['occupation']}"; ?>
            
        </td>
        
        </tr>
        <?php
    }
    ?>

    </table>
    </center>
</div>


</body>

</html>
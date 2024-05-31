<?php
error_reporting(0);
session_start();



// Your adminhome.php content here


$host = "localhost";
$user = "root";
$password = "";
$db = "aesthetic"; 

$data = mysqli_connect($host, $user, $password, $db);
$sql= "SELECT * FROM stored";

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
            <li><a href="adminhome.php">Stored Versions </a></li>
            <li> <a href="customers.php">Our Customers </a></li>
            
            <li><a href="logout.php" class="btn btn-success"> Logout </a></li>
        </ul>
    </nav>





    <center>
    <div class="content">
    
    <h1>Our Customers : </h1>
    <br>

    <br>


    <table border="1px">
        <tr>
            <th style="padding:20px; font-size:15px;" >Model Name</th>
            <th style="padding:20px; font-size:15px;">Model Version</th>
            <th style="padding:20px; font-size:15px;">OS Version</th>
            <th style="padding:20px; font-size:15px;">Guarantee</th>
            <th style="padding:20px; font-size:15px;">Battery Health</th>
            <th style="padding:20px; font-size:15px;">Price</th>
            <th style="padding:20px; font-size:15px;">Delete</th>
            
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
            <?php echo "{$info['mversion']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['osversion']}"; ?>
            
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['guarantee']}"; ?>
            
        </td>
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['health']}"; ?>
            
        </td>
        </td>
            <td style="padding:20px;">
            <?php echo "{$info['price']}"; ?>
            
        </td>
        <td style="padding:20px;">
            <?php echo "<a  class='btn btn-danger-1' onClick=\"javascript:return confirm('Are You Sure TO Delete This?');\" href='delete.php?store_id={$info['id']}'> Delete </a>"; ?>
            
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














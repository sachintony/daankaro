<!-- connect file -->
<?php
include('../includes/connection.php');
session_start();
// include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DaanKaro</title>
    <!-- bootstrap css and js link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
<style>
        .bg-pink {
            background-color: rgba(174,134,157,0.3); /* You can replace this with your desired pink color code */
        }
        .bg-pinkd{
            background-color: rgba(174,134,157,0.5);
        }
    </style>
</head>
<body>
 <!-- NAVBAR -->
 <!-- container-fluid takes hundred percent of width -->
 <div class="conatiner-fluid p-0">
<!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light bg-pinkd">
  <div class="container-fluid">
    <img src="../images/logodesign.png" alt="Logoimage" class="logo" style="height:7%; width:7%">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Donate Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Resgister</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      
       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" class="btn btn-outline-light" value="Search" name="search_data_product">
      </form>
    </div>
  </div>
</nav>



<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-pink">
<ul class="navbar-nav me-auto">
 <?php 
          if(!isset($_SESSION['username'])){
            echo " <li class='nav-item'>
            <a class='nav-link text-dark' href='#'>Welcome Guest</a>
          </li>";
          }
          else{
            echo " <li class='nav-item'>
            <a class='nav-link text-dark' href='#'>Welcome ".$_SESSION['username']."</a>
          </li>";
          }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='./user_login.php'>Login</a>
        </li>";
        }
        else{
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='logout.php'>Logout</a>
        </li>";
        }
        ?>
</ul>
</nav>

<!-- third child -->
<div class="bg-light">
    <h3 class="text-center">List of products</h3>
    <p class="text-center">DaanKaro Hai Toh Mumkin Hai!.</p>
</div>

<!-- fourth child -->

<div class="row">
    <div class="col-md-12">
        <!-- products -->
<div class="row">
    <?php
      if(!isset($_SESSION['username'])){
        include('user_login.php');
      }  
      else{
        include('payment.php');
      }
    ?>
</div>
<!-- col end  -->
   </div>
    
   
</div>

<!-- last child --> 
<?php include("../includes/footer.php") ?>
 </div>
</body>
</html>
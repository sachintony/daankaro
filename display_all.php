<!-- connect file -->
<?php
include('includes/connection.php');
include('functions/common_function.php');
session_start();
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
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
        .bg-pink {
            background-color: rgba(174,134,157,0.3); /* You can replace this with your desired pink color code */
        }
        .bg-pinkd{
            background-color: rgba(174,134,157,0.5);
        }
        body{
            overflow-x : hidden;
        }
        * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* overflow-x: hidden; */
}
.logo {
  width: 7%;
  height: 7%;
}
.card-img-top {
  width: 100%;
  height: 200px;
  object-fit: contain;
}
.profile_img {
  width: 100%;
  height: 100%;
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
    <img src="./images/logodesign.png" alt="Logoimage" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="main2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Donate Now</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
          
        <li class="nav-item">
          <a class="nav-link" href="blog.php" >Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item()?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?></a>
        </li>
     
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" class="btn btn-outline-light" value="Search" name="search_data_product">
      </form>
    </div>
  </div>
</nav>
<!-- calling cart function -->
<?php 
cart();
?>
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
            <a class='nav-link text-dark' href='#'>.  Welcome ".$_SESSION['username']."</a>
          </li>";
          }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='./users_area/user_login.php'>Login</a>
        </li>";
        }
        else{
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='./users_area/logout.php'>Logout</a>
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

<div class="row mx-3">
    <div class="col-md-10">
        <!-- products -->
<div class="row">
  <!-- display products -->
    <?php
    //calling function
  get_all_products();
  get_unique_categories();
  get_unique_events();
    ?>
<!-- row end -->
</div>
<!-- col end  -->
   </div>
    
   <!-- Ngo's to be displayed -->
   <div class="col-md-2 bg-pink p-0">
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-pinkd">
            <a href="#" class="nav-link text-light"><h4>Events</h4></a>
        </li>
<?php 
getevents();
?>
       
    </ul>
    <!-- Categories to be displayed -->
    <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-pinkd">
            <a href="#" class="nav-link text-light"><h4>Categories's</h4></a>
        </li>
        <?php 
getcategories();
?>    
    </ul>
        </div>
</div>

<!-- last child --> 
<!-- include footer -->
<?php include("./includes/footer.php") ?>
 </div>
</body>
</html>
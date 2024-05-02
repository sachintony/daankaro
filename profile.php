<!-- connect file -->
<?php
include('../includes/connection.php');
include('../functions/common_function.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome  <?php echo $_SESSION['username'] ?></title>
    <!-- bootstrap css and js link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="../style.css"> -->
<style>
        .bg-pink {
            background-color: rgba(174,134,157,0.3); /* You can replace this with your desired pink color code */
        }
        .bg-pinkd{
            background-color: rgba(174,134,157,0.5);
        }
        .bg-blued{
          background-color:#17252A
        }
        .bg-blue{
          background-color:#3AAFA9
        }
        .bg-rose{
          /* background-color: rgba(181, 150, 174); */
          background-color: rgba(174,134,157,0.6);
        }
body {
  overflow-x: hidden;
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
  width: 90%;
  margin:auto;
  display:block;
  /* height: 100%; */
  object-fit:contain;
}
.message-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-top: 10px;
     
    }
  .message {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .button {
        padding: 10px 20px;
        /* background-color: #007bff; */
        background-color: #50c878;

        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #2E8B57;
    }
    .edit_image{
      width:100px;
      height:100px;
      object-fit:contain;
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
    <img src="../images/logodesign.png" alt="Logoimage" class="logo">
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
          <a class="nav-link" href="profile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cart.php"><i class="fa-solid fa-cart-shopping"></i><sup><?php cart_item()?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: <?php total_cart_price(); ?></a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" action="../search_product.php" method="get">
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
          <a class='nav-link text-dark' href='#'>  Welcome ".$_SESSION['username']."</a>
        </li>";
        }
        if(!isset($_SESSION['username'])){
          echo " <li class='nav-item'>
          <a class='nav-link text-dark' href='user_login.php'>Login</a>
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

<!-- fourth child  -->
<div class="row">
    <div class="col-md-2 ">
<ul class="navbar-nav bg-pink text-center" style="height:100vh">
<li class="nav-item bg-rose">
          <a class="nav-link active text-decoration-none  text-dark" href="#"><h4>PROFILE</h4></a>
        </li>

<?php
$username=$_SESSION['username'];
$user_image = "select * from `user_table` where username='$username'";
$result_image = mysqli_query($conn,$user_image);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['user_image'];
echo"<li class='nav-item'>
<img src='./user_images/$user_image' class='profile_img' alt='user'>
</li>";
?>
<li class="nav-item">
          <a class="nav-link active text-decoration-none text-dark" href="profile.php">Pending Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-decoration-none text-dark" href="profile.php?edit_account">Edit Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-decoration-none text-dark" href="profile.php?my_donations">My Donations</a>
      </li>
        <li class="nav-item">
          <a class="nav-link active text-decoration-none text-dark" href="profile.php?delete_account">Delete Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-decoration-none text-dark" href="logout.php">Log Out</a>
        </li>
        </ul>
    </div>
    <div class="col-md-10 text-center">
      <?php get_user_donation_details();
      if(isset($_GET['edit_account'])){
        include('edit_account.php');
      } 
      if(isset($_GET['my_donations'])){
        include('user_donations.php');
      }
      if(isset($_GET['delete_account'])){
        include('delete_account.php');
      }
      ?>
    </div>
</div>

<!-- last child --> 
<?php include("../includes/footer.php") ?>
 </div>
</body>
</html>
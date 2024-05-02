<!-- connect file -->
<?php
include('../includes/connection.php');
include('../functions/common_function.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- css file linking -->
    <link rel="stylesheet" href="../style.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
        .bg-pink {
            background-color: rgba(174,134,157,0.3); /* You can replace this with your desired pink color code */
        }

        .bg-pinkd{
            background-color: rgba(174,134,157,0.5);
        }

        .admin_image {
  width: 100px;
  object-fit: contain;
}
    .footer{
    position:absolute;
    bottom:0;
}
.button button {
        margin-bottom: 10px; /* Increase the space between buttons */
        width: 150px; /* Make buttons full-width */
    }
    body{
        overflow-x:hidden;
    }
    thead{
    background-color:pink;
}
.logo{
    height:95px;
    width:180px;
}
.product_img{
    width:100px;
    object-fit:contain;
}
    </style>
</head>
<body>
<!-- nav bar -->
<div class="container-fluid p-0">
    <!-- first child -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <img src="../images/logodaan.png" alt="Logo" class="logo">
        <nav class="navbar navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item">
            <a href="" class="nav-link">Welcome Guest</a>
</li>
            </ul>
</nav>
    </div>
</nav>

<!-- second child -->
<div class="bg-pinkd">
    <h3 class="text-center p-2">Ngo Dashboard</h3>
</div>

<!-- third child -->
<div class="row">
    <div class="col-md-12 bg-pink p-1 d-flex align-items-center">
        <div class="p-3">
       <a href="#"><img src="../images/ngo4.png" alt="userimage"
         class="admin_image"></a>
            <p class="text-dark text-center">DaanKaro</p>
</div>


<!-- buttons -->
  <div class="button text-center">
    <button class="my-3">
        <a href="insert_product.php" class="nav-link text-dark bg-pinkd my-1">Insert Products</a>
    </button>
    <button>    
        <a href="index.php?view_products" class="nav-link text-dark bg-pinkd my-1" target="_blank">View Products</a>
    </button>
    <button>
        <a href="index.php?insert_category" class="nav-link text-dark bg-pinkd my-1">Insert Categories</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">View Categories</a>
    </button>
    <button>
        <a href="index.php?insert_event" class="nav-link text-dark bg-pinkd my-1">Insert Events</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">View Events</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">All Donations</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">All Payments</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">List Users</a>
    </button>
    <button>
        <a href="" class="nav-link text-dark bg-pinkd my-1">Logout</a>
    </button>
  </div> 
</div>
</div>

<!-- fourth child -->
<div class="container my-3">
    <?php
     if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    } 
    if(isset($_GET['insert_event'])){
        include('insert_events.php');
    } 
    if(isset($_GET['view_products'])){
        include('view_products.php');
    }
    if(isset($_GET['edit_products'])){
        include('edit_products.php');
    }
    ?>
</div>

<!-- last child --> 
<?php include("../includes/footer.php") ?>

</div>


<!-- bootstrap javascript link-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
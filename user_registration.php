<?php 
include('../includes/connection.php');
include('../functions/common_function.php');

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
     <!-- bootstrap css and js link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container-fluid my-3 ">
    <h2 class="text-center">New User Registration</h2>
<div class="row d-flex align-items-center justify-content-center">
    <div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-outline mb-4">
        <!-- username field -->
        <label for="user_username" class="form-label">User Name</label>
        <input type="text" id="user_username" class="form-control" placeholder="Enter Username" autocomplete="off" required="required" name="user_username"/>
        </div>
        <div class="form-outline mb-4">
        <!-- email field -->
        <label for="user_email" class="form-label">E-mail</label>
        <input type="email" id="user_email" class="form-control" placeholder="Enter E-mail" autocomplete="off" required="required" name="user_email"/>
</div>
<!-- image field -->
<div class="form-outline mb-4">
        <label for="user_image" class="form-label">User Image</label>
        <input type="file" id="user_image" class="form-control" placeholder="Enter Username" autocomplete="off" required="required" name="user_image"/>
</div>
<!-- password field -->
<div class="form-outline mb-4">
<label for="user_password" class="form-label">Password</label>
        <input type="password" id="user_password" class="form-control" placeholder="Enter Password" autocomplete="off" required="required" name="user_password"/>
        </div>
<!--Confirm password field -->
<div class="form-outline mb-4">
<label for="conf_user_password" class="form-label">Confirm Password</label>
        <input type="password" id="conf_user_password" class="form-control" placeholder="Confirm Password" autocomplete="off" required="required" name="conf_user_password"/>
        </div>
           <!-- Address field -->
        <div class="form-outline mb-4">
     <label for="user_address" class="form-label">Address</label>
        <input type="text" id="user_address" class="form-control" placeholder="Enter Address" autocomplete="off" required="required" name="user_address"/>
        </div>
          <!-- Contact field -->
          <div class="form-outline mb-4">
     <label for="user_contact" class="form-label">Contact</label>
        <input type="text" id="user_contact" class="form-control" placeholder="Enter mobile number" autocomplete="off" required="required" name="user_contact"/>
        </div>
<div class="mt-4 pt-2">
    <input type="submit" value="Register" class="bg-info py-2 px-3 border-0" name="user_register">  
    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account ?<a href="user_login.php" class="text-danger"> Login</a></p>
</div>
</form>
    </div>
  </div>  
  </div>  
</body>
</html>

<?php
if(isset($_POST['user_register'])){
  $user_username =$_POST['user_username'];
  $user_email=$_POST['user_email'];
  $user_password=$_POST['user_password'];
  $hash_password = password_hash($user_password,PASSWORD_DEFAULT);
  $conf_user_password=$_POST['conf_user_password'];
  $user_address=$_POST['user_address'];
  $user_contact=$_POST['user_contact'];
  $user_image=$_FILES['user_image']['name'];
  $user_image_tmp=$_FILES['user_image']['tmp_name'];
  $user_ip=getIPAddress();

  $select_query = "select * from `user_table` where username='$user_username'";
  $result = mysqli_query($conn, $select_query);
  $rows_count=mysqli_num_rows($result);
  $select_email = "select * from `user_table` where user_email='$user_email'";
  $result_email= mysqli_query($conn, $select_email);
  $rows_email=mysqli_num_rows($result_email);
  if($rows_count>0){
echo "<script>alert('Username already exists')</script>";
}
else if($rows_email>0){
  echo "<script>alert('E-mail already exists')</script>";
  
}
else if($user_password!=$conf_user_password){
echo "<script>alert('Passwords do not match')</script>";
}
// insert query
else{
move_uploaded_file($user_image_tmp,"./user_images/$user_image");
 $insert_query = "insert into `user_table` (username,user_email,user_password,user_image,user_ip,user_address,user_mobile) values('$user_username','$user_email','$hash_password','$user_image','$user_ip',' $user_address','$user_contact')";
 $sql_execute = mysqli_query($conn,$insert_query);
// if($sql_execute){
// echo "<script>alert('Data inserted successfully')</script>";
// }
// else{
//   echo "eror";
// }
// }
}
//selecting cart items
$select_cart_items = "select * from `cart_details` where ip_address='$user_ip'";
$result_cart = mysqli_query($conn,$select_cart_items);
$rows_count=mysqli_num_rows($result_cart );
if($rows_count>0){
$_SESSION['username']=$user_username;
echo "<script>alert('You Have items in your cart')</script>";
echo "<script>window.open('checkout.php','_self')</script>";
}
else{
echo "<script>window.open('../index.php','_self')</script>";
}
}
?>
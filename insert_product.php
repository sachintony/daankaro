<!-- // new code for image updation -->
<?php 
include('../includes/connection.php');
if(isset($_POST['insert_product'])){
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_keywords = $_POST['product_keywords'];
    $product_categories = $_POST['product_categories'];
    $product_event = $_POST['product_event'];
    $product_price = $_POST['product_price'];
    $product_status = "true";
    $uploadedImages = array();

    for ($i=1; $i <= 3; $i++) { 
        if($_FILES["product_image$i"]["error"] === 0){
            $fileName = $_FILES["product_image$i"]["name"];
            $fileSize = $_FILES["product_image$i"]["size"];
            $tmpName = $_FILES["product_image$i"]["tmp_name"];

            $validImageExtension = ['jpg','jpeg','png'];
            $imageExtension = explode('.',$fileName);
            $imageExtension = strtolower(end($imageExtension));
            if(!in_array($imageExtension ,$validImageExtension)){
                echo "<script> alert('Invalid Image Extension');</script>";
            }
            else if($fileSize > 1000000){
                echo "<script> alert('Image Size is too large');</script>";
            }
            else{
                $newImageName = uniqid() . '.' . $imageExtension;
                $uploadedImages[] = $newImageName;
                move_uploaded_file($tmpName, './product_images/'. $newImageName);
            }
        }
    }
if (!empty($uploadedImages)) {
    $insert_products = "insert into `products` (product_title,product_description,product_keywords,category_id,event_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$description','$product_keywords',' $product_categories','$product_event','$uploadedImages[0]','$uploadedImages[1]','$uploadedImages[2]','$product_price',NOW(),'$product_status')";
    $result_query = mysqli_query($conn,$insert_products);
    if($result_query){
        echo "<script>alert('Successfully inserted the products')</script>";  
    }    
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
<!-- bootstrap css and js link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!-- form -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- title -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label1">Product title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
        </div>
        <!-- description -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label1">Product description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
        </div>
         <!-- keywords -->
         <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_keywords" class="form-label1">Product keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
        </div>

        <!-- categories -->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_categories" id="" class="form-select">
<option value="">Select a Category</option>
<?php
// query for selecting all the categories into a variable and pass that variable with the connection run a loop unitl all rows fetched
$select_query = "select * from `categories`";
$result_query= mysqli_query($conn,$select_query);
while($row = mysqli_fetch_assoc($result_query)){
    $category_title =$row['category_title'];
    $category_id = $row['category_id'];
  echo "<option value='$category_id'>$category_title</option>";
}?>
</select>
</div>

<!-- select an event-->
<div class="form-outline mb-4 w-50 m-auto">
            <select name="product_event" id="" class="form-select">
<option value="">Select a Event</option>
<?php
// query for selecting all the events into a variable and pass that variable with the connection run a loop unitl all rows fetched
$select_query = "select * from `events`";
$result_query= mysqli_query($conn,$select_query);
while($row = mysqli_fetch_assoc($result_query)){
    $event_title =$row['event_title'];
    $event_id = $row['event_id'];
  echo "<option value='$event_id'> $event_title</option>";
}?>
</select>
</div>

<!-- Image 1 -->
<div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image1" class="form-label1">Product Image 1</label>
            <input type="file" name="product_image1" id="product_image1" class="form-control"required="required">
        </div>
<!-- Image 2 -->
<div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label1">Product Image 2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control"required="required">
        </div>
        <!-- Image 3 -->
<div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image3" class="form-label1">Product Image 3</label>
            <input type="file" name="product_image3" id="product_image3" class="form-control"required="required">
        </div>

        <!-- price -->
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label1">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
           <input type="submit" name="insert_product" class="btn btn-danger" value="Insert Product">
        </div>

        </form>
    </div>
</body>
</html>
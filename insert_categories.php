<?php
include('../includes/connection.php');
// if the button is clicked 
if(isset($_POST['insert_cat'])){
    // access the input value
   $category_title =$_POST['cat_title'];

//select data from database to check whether it exists previously or not
$select_query = "select * from `categories` where category_title= '$category_title'";
$result_select =mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select);

if($number>0){
    echo '<script>alert("This category already exists")</script>';
}
else{
    //insert the data if the category does not exist previously
$insert_query= "insert into `categories`(category_title) values('$category_title')";
$result = mysqli_query($conn,$insert_query);
if($result){
    echo "<script>alert('The Category has been inserted successfully')</script>";
}
}
}
?>

<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-3">
<div class="input-group w-90 mb-2 mt-2">
<span class="input-group-text bg-pinkd" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
</span>
<input type="text" class="form-control " name="cat_title" placeholder="Insert Categorioes" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
    
<input type="submit" class="bg-pinkd border-0 p-2 my-3" name="insert_cat"  value="Insert Categorioes" >
</div>
</form>
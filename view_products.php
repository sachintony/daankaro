<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

<h3 class="text-center text-success">View Products</h3>
<table class="table table-bordered mt-5">
<thead class="bg-success">
    <tr>
    <th>Product ID</th>
        <th>Product Title</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Total Donations</th>
        <th>Staus</th>
        <th>Edit</th>          
        <th>Delete</th>  
    </tr> 
</thead>
<tbody class="bg-secondary text-light">
<?php
$get_products ="select * from `products`"; 
$result = mysqli_query($conn,$get_products);
$number=0;
while($row=mysqli_fetch_assoc($result)){
    $product_id = $row['product_id'];
    $product_title = $row['product_title'];
    $product_image1 = $row['product_image1'];
    $product_price = $row['product_price'];
    $status = $row['status'];
    $number++;
    ?>  
    <tr class='text-center bg-info'>
    <td><?php echo $number;?></td>
    <td><?php echo $product_title;?></td>
    <td><img src='./product_images/<?php echo $product_image1;?>' class='product_img'/></td>
    <td><?php echo $product_price;?></td>
    <td><?php 
$get_count="select * from `donations_pending` where product_id=$product_id";
$result_count=mysqli_query($conn,$get_count);
$rows_count=mysqli_num_rows($result_count);
echo $rows_count;
?></td>
    <td><?php echo $status; ?></td>
    <td><a href='index.php?edit_products' class=''><i class='fa-solid fa-pen-to-square'></i></a></td>
    <td><a href='' class=''><i class='fa-solid fa-trash'></i></a></td>
</tr>
<?php
}
?>

</tbody>
</table>      

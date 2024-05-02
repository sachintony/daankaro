<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations</title>
</head>
<body>
    <?php
    $username = $_SESSION['username'];
    $get_user="select * from `user_table` where username='$username'";
    $result=mysqli_query($conn,$get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['user_id'];
    // echo $user_id;
   ?>
<h3 class="text-success">All Donations</h3>
   <table class="table table-bordered mt-5">
    <thead class="my">
    <tr>
        <th>S No</th>
        <th>Amount Due</th>
        <th>Total products</th>
        <th>Invoice Number</th>
        <th>Date</th>
        <th>Complete/Incomplete</th>
        <th>Status</th>
    </tr>
</thead>
<tbody class="bg-secondary">
    <?php 
    $get_donation_details="select * from `user_donations` where user_id=$user_id";
    $result_donations=mysqli_query($conn,$get_donation_details);
    $number=1;
    while($row_donations=mysqli_fetch_assoc($result_donations)){
        $did=$row_donations['donation_id'];
        $amount_due=$row_donations['amount_due'];
        $total_products=$row_donations['total_products'];
        $invoice_number	=$row_donations['invoice_number'];
        $donation_status=$row_donations['donation_status'];
        if($donation_status=='pending'){
            $donation_status='Incomplete';
        }
        else{
            $donation_status='Complete';
        }
        $donation_date=$row_donations['donation_date'];
        echo "<tr>
        <td>$number</td>
        <td>$amount_due</td>
        <td>$total_products</td>
        <td>$invoice_number</td>
        <td>$donation_date</td>
        <td>$donation_status</td>";
        ?>
<?php
if($donation_status=='Complete'){
    echo "<td>Paid</td>";
}
else{
   echo "<td><a href='confirm_payment.php?donation_id=$did'>Confirm</a></td>
   </tr>";
}
$number++;
}
?>
</tbody>
</table> 
</body>
</html>
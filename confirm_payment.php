<?php
include('../includes/connection.php');
include('../functions/common_function.php');
session_start();
if(isset($_GET['donation_id'])){
    $donation_id=$_GET['donation_id'];

  $select_data = "select * from `user_donations` where donation_id=$donation_id";
  $result=mysqli_query($conn,$select_data);
  $row_fetch=mysqli_fetch_assoc($result);
  $invoice_number=$row_fetch['invoice_number'];
  $amount_due=$row_fetch['amount_due'];
}
if(isset($_POST['confirm_payment'])){
  $invoice_number=$_POST['invoice_number'];
  $amount=$_POST['amount'];
  $payment_mode=$_POST['payment_mode'];
 $insert_query = "insert into `user_payments` (donation_id,invoice_number,amount,payment_mode) values($donation_id,$invoice_number,$amount,'$payment_mode')";
  $result=mysqli_query($conn,$insert_query);
  if($result){
      echo "<h3 class='text-center text-light'>Successfully Completed the payment</h3>";
      echo "<script>window.open('profile.php?my_donations','_self')</script>";
}
$update_donations = "update `user_donations` set donation_status='Complete' where donation_id=$donation_id";
$result_donations=mysqli_query($conn,$update_donations);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
     <!-- bootstrap css and js link-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- fontawesome link --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-secondary">
    <h1 class="text-center text-light">Confirm Payment</h1>
    <div class="container my-5">
<form action="" method="post">
    <div class="form-outline my-4 text-center w-50 m-auto">
        <input type="text" class="form-control w-50 m-auto" name="invoice_number" value="<?php echo $invoice_number ?>" >
    </div>
    <div class="form-outline my-4 text-center w-50 m-auto">
        <label for="" class="text-light">Amount</label>
        <input type="text" class="form-control w-50 m-auto" name="amount" value="<?php echo  $amount_due ?>" >
    </div>
    <div class="form-outline my-4 text-center w-50 m-auto">
    <select name="payment_mode" class="form-select w-50 m-auto">
        <option>Select Payment Mode</option>
        <option>UPI</option>
        <option>Netbanking</option>
        <option>Paypal</option>
        <option>PayOffline</option>
</select>
    </div>
    <div class="form-outline my-4 text-center w-50 m-auto">
    <input type="submit" class="bg-info py-2 px-3 border-0" value="Confirm" name="confirm_payment">
    </div>
</form>
    </div>
</body>
</html>
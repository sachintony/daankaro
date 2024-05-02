<?php
include('../includes/connection.php');
// if the button is clicked 
if(isset($_POST['insert_event'])){
    // access the input value
   $event_title =$_POST['event_title'];

//select data from database to check whether it exists previously or not
$select_query = "select * from `events` where event_title= '$event_title'";
$result_select =mysqli_query($conn,$select_query);
$number=mysqli_num_rows($result_select);

if($number>0){
    echo '<script>alert("This Event already exists")</script>';
}
else{
    //insert the data if the category does not exist previously
$insert_query= "insert into `events`(event_title) values('$event_title')";
$result = mysqli_query($conn,$insert_query);
if($result){
    echo "<script>alert('The Event has been inserted successfully')</script>";
}
}
}
?>
<h2 class="text-center">Insert Events</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2 mt-3">
<span class="input-group-text bg-pinkd" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
</span>
<input type="text" class="form-control" name="event_title" placeholder="Insert Events" aria-label="events" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" class="bg-pinkd border-0 p-2 my-3.0" name="insert_event"  value="Insert Event" >
</div>
</form>
<?php
include 'userNav.php';
$query = "select * from registration where id = '$cand_id ' ";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_array($query_run);
$email=$row['email'];

?>
<link rel="stylesheet" href="CSS/allProp.css">
<div class="property-heading">
    <h2>All Properties</h2>
  </div>

  <?php
$myquery = "SELECT * FROM `property`";
$query_run1 = mysqli_query($con,$myquery);
 while($output = mysqli_fetch_array($query_run1)){
    ?>
    <div class="container">
    <div class="left">
      <img src="dbimg/<?php echo $output['landPic'];?>" alt="Property Image">
    </div>
    <div class="right">
      <h2>Property Details</h2>
      <p><strong>Name:</strong> <?php echo $output['name'];?></p>
      <p><b>Email:</b><?php echo $output['email'];?></p>
      <p><strong>Contact No:</strong> <?php echo $output['contact'];?></p>
      <p><strong>Price:₹</strong> <?php echo $output['price'];?></p>
    </div>
  </div>
    
    <?php
 
 }

include 'userFooter.php';

?>
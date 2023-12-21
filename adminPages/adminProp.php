<?php  
include 'adminNav.php';
?>
<link rel="stylesheet" href="CSS/adminProp.css">
<div class="property-heading">
    <h2>Manage Properties</h2>
  </div>

  <?php
$myquery = "SELECT * FROM `property`";
$query_run1 = mysqli_query($con,$myquery);
 while($output = mysqli_fetch_array($query_run1)){
    ?>
    <div class="container">
    <div class="left">
      <img src="../userPages/dbimg/<?php echo $output['landPic'];?>" alt="Property Image">
    </div>
    <div class="right">
      <h2>Property Details</h2>
      <p><strong>Name:</strong> <?php echo $output['name'];?></p>
      <p><b>Email:</b><?php echo $output['email'];?></p>
      <p><strong>Contact No:</strong> <?php echo $output['contact'];?></p>
      <p><strong>Price:₹</strong> <?php echo $output['price'];?></p>

            <td class="operations"><a href="removeProp.php?id=<?php echo $output['id']?>"> <img src="../image/remove.png" alt="" style="width:22px; margin-left: 2pc;" title="remove"></a>
            </td>
    </div>
  </div>
    
    <?php
 
 }
 
 include 'adminFooter.php';
 



?>
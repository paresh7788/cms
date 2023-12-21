<?php
include 'userNav.php';
$query = "select * from registration where id = '$cand_id ' ";
$query_run = mysqli_query($con,$query);
$row = mysqli_fetch_array($query_run);
$email=$row['email'];


                

                // $nums=mysqli_num_rows($query);

?>
<link rel="stylesheet" href="CSS/myProp.css">
<div class="property-heading">
    <h2>My Property</h2>
  </div>
<?php
$myquery = "SELECT * FROM `property` WHERE email='$email' ";
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

      <td class="operations"><a href="editMyProp.php?id=<?php echo $output['id']?>"><img src="../image/edit.png" alt="" style="width:22px; margin-left: 2pc;" title="edit"></a></td>

      <td class="operations"><a href="removeMyProp.php?id=<?php echo $output['id']?>"><img src="../image/remove.png" alt="" style="width:22px; margin-left: 2pc;" title="edit"></a></td>
    </div>
  </div>
    
    <?php
 
 }

 include 'userFooter.php';

?>

<?php  
include 'adminNav.php';
$propertyId = $_GET['id'];


$query = "select * from property where id={$propertyId}";
      $query_run = mysqli_query($con,$query);
       $row = mysqli_fetch_array($query_run);
       
?>
<link rel="stylesheet" href="CSS/removeRecord.css">
<div class="property-heading">
    <h2>Delete User Property</h2>
  </div>
  <div class="container">
      <h2>Property Details</h2>
      <p><strong>Posted By:</strong><?php echo $row['name'];?> </p>
      <p><b>Email:</b><?php echo $row['contact'];?></p>
      <p><strong>Contact No:</strong><?php echo $row['email'];?> </p>
      <p><strong>Price:</strong><?php echo $row['price'];?></p>
      <form id="myForm" onsubmit=""  method="POST">
         <button type="submit" name="Delete" ><b>DELETE</b></button>
          <button type="submit" name="Cancel"><b>CANCEL</b></button>
     </form>

    </div>
<?php
    if(isset($_POST['Cancel'])){
    header("location:adminProp.php");
}
if(isset($_POST['Delete'])){
    $dltquery = "DELETE FROM `property` WHERE id={$propertyId}";
    if(mysqli_query($con,$dltquery)){
        ?>
           <script>
           alert("User Property Removed sucessfully");
           location.replace("adminProp.php");
           </script>
           <?php
      }else{
               ?>
                <script>
                alert("Error occurred");
                </script>
                <?php

      }

}





?>
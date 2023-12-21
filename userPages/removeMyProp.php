<?php  
include 'userNav.php';
$myPropId = $_GET['id'];

$query = "select * from property where id={$myPropId}";
      $query_run = mysqli_query($con,$query);
       $row = mysqli_fetch_array($query_run);

?>
<link rel="stylesheet" href="CSS/removeMyProp.css">
<div class="property-heading">
    <h2>Delete this property</h2>
</div>
  <div class="container">
      <h2>Property Details</h2>
      <p><strong>Name:</strong> <?php echo $row['name'];?></p>
      <p><b>Email:</b><?php echo $row['email'];?></p>
      <p><strong>Contact No:</strong> <?php echo $row['contact'];?></p>
      <p><strong>Price</strong> <?php echo $row['price'];?></p>
      <h2>Are You Sure ??</h2>
      <form id="myForm" onsubmit=""  method="POST">
         <button type="submit" name="Delete" ><b>DELETE</b></button>
          <button type="submit" name="Cancel"><b>CANCEL</b></button>
     </form>

   </div>
<?php
if(isset($_POST['Cancel'])){
    header("location:myProp.php");
}
if(isset($_POST['Delete'])){
    $dltquery = "DELETE FROM `property` WHERE id={$myPropId}";
    if(mysqli_query($con,$dltquery)){
        ?>
           <script>
           alert("This Property is Removed sucessfully!!");
           location.replace("myProp.php");
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
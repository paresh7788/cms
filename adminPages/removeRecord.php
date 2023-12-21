<?php  
include 'adminNav.php';
$regId = $_GET['id'];


$query = "select * from registration where id={$regId}";
      $query_run = mysqli_query($con,$query);
       $row = mysqli_fetch_array($query_run);

?>
<link rel="stylesheet" href="CSS/removeRecord.css">
<div class="property-heading">
    <h2>Delete User Records</h2>
  </div>
  <div class="container">
      <h2>User Details</h2>
      <p><strong>Name:</strong> <?php echo $row['name'];?></p>
      <p><b>Email:</b><?php echo $row['email'];?></p>
      <p><strong>Contact No:</strong> <?php echo $row['phone'];?></p>
      <form id="myForm" onsubmit=""  method="POST">
         <button type="submit" name="Delete" ><b>DELETE</b></button>
          <button type="submit" name="Cancel"><b>CANCEL</b></button>
     </form>

    </div>
<?php
    if(isset($_POST['Cancel'])){
    header("location:adminRecord.php");
}
if(isset($_POST['Delete'])){
    $dltquery = "DELETE FROM `registration` WHERE id={$regId}";
    if(mysqli_query($con,$dltquery)){
        ?>
           <script>
           alert("User details Removed sucessfully");
           location.replace("adminRecord.php");
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
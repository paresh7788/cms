<?php  
include 'adminNav.php';
$regId = $_GET['id'];


$query = "select * from registration where id={$regId}";
      $query_run = mysqli_query($con,$query);
       $row = mysqli_fetch_array($query_run);

?>

<link rel="stylesheet" href="CSS/editRecord.css">
<div class="property-heading">
    <h2>Edit User Records</h2>
  </div>

  <main>
  <form id="myForm" onsubmit=""  method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name'] ;?>" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" value="<?php echo $row['phone'] ;?>" pattern="[0-9]{10}" required>
    <small>Format: 10 digits without spaces</small>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"  value="<?php echo $row['email'] ;?>" required>


    <button type="submit" name="Update" onclick="validateForm()"><b>Update</b></button>
    <button type="submit" name="Cancel"><b>Cancel</b></button>
  </form>
  </main>
  <script>
  function validateForm() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    // Validate name (should not be empty)
    if (!name.trim()) {
      alert('Please enter your name.');
      return;
    }

    // Validate phone number (should be 10 digits)
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
      alert('Please enter a valid 10-digit phone number.');
      return;
    }

    // Validate email (should be a valid email format)
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert('Please enter a valid email address.');
      return;
    }


  }
</script>
<?php
if(isset($_POST['Cancel'])){
    header("location:adminRecord.php");
}

 if(isset($_POST['Update'])){

  $username=$_POST['name'];
  $phoneNo=$_POST['phone'];
  $email=$_POST['email'];

     $updtqry = "UPDATE `registration` SET name ='$username',email='$email',phone ='$phoneNo' where id={$regId}";
    if(mysqli_query($con,$updtqry)){
        ?>
           <script>
           alert("User details updated sucessfully");
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
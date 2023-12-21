<?php
session_start();
include '../database/dbcon.php';
$cand_id = $_SESSION['cand_id'];

  $query = "select * from registration where id = '$cand_id ' ";
  $query_run = mysqli_query($con,$query);
  $row = mysqli_fetch_array($query_run);

?>
<link rel="stylesheet" href="CSS/userNav.css">
<body>

<nav>
  <div>
    <img class="logo" src="../image/user.gif" alt="Logo">
  </div>
  
  <div class="buttons">
    <a href="allProp.php" class="button">All Properties</a>
    <a href="myProp.php" class="button">My Property</a>
    <a href="addProp.php" class="button">Add Property</a>
   
  </div>
 
  <div>
    <h3 class="heading"><?php echo $row['name']; ?></h3>
    <h3 class="heading"><?php echo $row['email']; ?></h3>
    <span class="logout" onclick="logout()"><b>Logout</b></span>
  </div>
</nav>

<!-- Your content goes here -->

<script>
  function logout() {
    
    // Implement your logout functionality here
    window.location.href = "../logout.php";
  }
</script>

</body>

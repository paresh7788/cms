<?php
session_start();
include '../database/dbcon.php';
$admin_id = $_SESSION['admin_id'];

  $query = "select * from admin where id = '$admin_id ' ";
  $query_run = mysqli_query($con,$query);
  $row = mysqli_fetch_array($query_run);

?>
<link rel="stylesheet" href="CSS/adminNav.css">
<body>

<nav>
  <div>
    <img class="logo" src="../image/admin.gif" alt="Logo">
  </div>
  
  <div class="buttons">
    <a href="adminProp.php" class="button">Manage Properties</a>
    <a href="adminRecord.php" class="button">Manage Records</a>
   
  </div>
 
  <div>
    <h3 class="heading"><b>Admin</b></h3>
    <h3 class="heading"><?php echo $row['adminName']; ?></h3>
    <span class="logout" onclick="logout()"><b>Logout</b></span>
  </div>
</nav>



<script>
  function logout() {
    
    // Implement our logout functionality here
    window.location.href = "../logout.php";
  }
</script>

</body>

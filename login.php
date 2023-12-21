<?php
include 'nav.php'
?>
<link rel="stylesheet" href="CSS/login.css">
<div class="main-container2">
  <div class="form">
    <select class="login-type-select" onchange="toggleLogin()">
      <option value="user">User Login</option>
      <option value="admin">Admin Login</option>
    </select>

    <div id="user-form" class="input-group">
        <form action="" method="POST">
          <input type="email" class="input-field" placeholder="User email" name="useremail" required>
          <input type="password" class="input-field" placeholder="Password" name="userpassword" required>
           <button type="submit" class="submit-btn" name="usersubmit">Login</button>

        </form>
      
    </div>

    <div id="admin-form" class="input-group" style="display: none;">
    <form action="" method="POST">
    <input type="email" class="input-field" placeholder="Admin ID" name="adminID" required>
      <input type="password" class="input-field" placeholder="Admin Password" name="adminPassword" required>
      <button type="submit" class="submit-btn" name="adminsubmit" >Login</button>

    </form>
      
    </div>
  </div>

  <div class="image-container">
    <img src="./image/set.gif" alt="Image">
  </div>
</div>

<script>
  function toggleLogin() {
    var loginType = document.querySelector(".login-type-select").value;
    var userForm = document.getElementById("user-form");
    var adminForm = document.getElementById("admin-form");

    if (loginType === 'user') {
      userForm.style.display = 'block';
      adminForm.style.display = 'none';
    } else {
      userForm.style.display = 'none';
      adminForm.style.display = 'block';
    }
  }

 

 
</script>



<?php
include 'footer.php';

// user login code

if(isset($_POST['usersubmit'])){
  $email = $_POST['useremail'];
  $password=$_POST['userpassword'];


  $email_search= "select * from registration where email='$email'  ";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);

  if($email_count){
      $email_pass = mysqli_fetch_assoc($query); 

      $db_pass = $email_pass['password'];

      // password verification 

      if($password === $db_pass){

        $_SESSION['cand_id']= $email_pass['id'];
          header('location: userPages/welcom.php?id=$id');

      }
      else{

          ?>
      <script>
          alert("password incorrect");
      </script>
      <?php

      }

  }
  else{

      ?>
      <script>
          alert("invalid email");
      </script>
      
      <?php
  }
}
// admin login code

if(isset($_POST['adminsubmit'])){
  $email = $_POST['adminID'];
  $password=$_POST['adminPassword'];


  $email_search= "select * from admin where adminName='$email'  ";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);

  if($email_count){
      $email_pass = mysqli_fetch_assoc($query); 

      $db_pass = $email_pass['adminpassword'];

      // password verification 

      if($password === $db_pass){

        $_SESSION['admin_id'] = $email_pass['id'];
        
          header('location: adminPages/adminWelcom.php');
          exit();

      }
      else{

          ?>
      <script>
          alert("password incorrect");
      </script>
      <?php

      }

  }
  else{

      ?>
      <script>
          alert("invalid email");
      </script>
      
      <?php
  }
}
?>
<?php
include 'nav.php';

?>

<link rel="stylesheet" href="CSS/regis.css">
  <header>
    <h1>Register Yourself</h1>
  </header>

  <main>
  <form id="myForm" onsubmit=""  method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" pattern="[0-9]{10}" required>
    <small>Format: 10 digits without spaces</small>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>
    <small>Format:should contain letter,no,special chracter.(e.g Abcd@212)</small>

    <button type="submit" name="submit" onclick="validateForm()">Submit</button>
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

    // Validate password (should be a valid alphanumeric format)
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z\d])\S{8,}$/;
    if (!passwordPattern.test(password)) {
      alert('Please enter a valid password.');
      return;
    }

    // If all validations pass, you can submit the form or perform additional actions
    alert("all good");

  }
</script>
<?php
include 'footer.php';
?>

  <?php

   if(isset($_POST['submit'])){

  $username=$_POST['name'];
  $phoneNo=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['password'];

    $emailquery = "select * from registration where email='$email' ";
    $query = mysqli_query($con,$emailquery);

    $emailcount = mysqli_num_rows($query);
    if($emailcount > 0){
      ?>
      <script>
       alert("Email already Registered!!");
      </script>
     <?php
    }
    else{
          $insertquery = "insert into registration(`name`, `email`, `phone`, `password`) values('$username','$email','$phoneNo','$password')";
          $iquery = mysqli_query($con,$insertquery);

          if($iquery)
              {
                 ?>
                  <script>
                  alert("registered sucessfully");
                  </script>
                 <?php
               }
          else{
                  ?>
                   <script>
                   alert(" not registered ");
                   </script>
                  <?php

               }

      }
      
  }

  


?>




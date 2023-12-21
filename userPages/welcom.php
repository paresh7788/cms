<?php
include 'userNav.php';

?>
<link rel="stylesheet" href="CSS/welcom.css">
<header>
    <h1>Welcome to HYSCALER CMS</h1>
  </header>

  <div class="container">
    <div class="welcome-message">
      <p>Hello, <?php echo $row['name']; ?>! Welcome to HYSCALER CMS.</p>
      <p>Explore and manage your properties with ease.</p>
    </div>

    <div class="property-options">
      <div class="property-option">
        <h2>All Properties</h2>
        <p>Explore all available properties for sale.</p>
        <a href="allProp.php"><b>View</b></a>
      </div>

      <div class="property-option">
        <h2>My Properties</h2>
        <p>View and manage your listed properties.</p>
        <a href="myProp.php"><b>View</b></a>
      </div>

      <!-- Add more property options as needed -->

    </div>

    <span class="logout" onclick="logout()">Logout</span>
  </div>

  <script>
    function logout() {
      // Implement your logout functionality here
      window.location.href = "../logout.php";
    }
  </script>

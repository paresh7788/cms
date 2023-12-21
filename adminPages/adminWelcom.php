<?php  
include 'adminNav.php';
?>
<link rel="stylesheet" href="CSS/adminWelcom.css">
<header>
    <h1>Welcome to HYSCALER CMS</h1>
  </header>

  <div class="container">
    <div class="welcome-message">
      <p>Hello, <b>Admin!</b> Welcome to HYSCALER CMS Admin Portal.</p>
    </div>

    <div class="property-options">
      <div class="property-option">
        <h2>Manage Properties</h2>
        <p>Manage all available properties for sale.</p>
        <a href="#">View Properties</a>
      </div>

      <div class="property-option">
        <h2>Manage Records</h2>
        <p>View and manage Records.</p>
        <a href="adminRecord.php"><b>View</b></a>
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
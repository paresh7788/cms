<?php
include 'database/dbcon.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/nav.css">
</head>
<body>

<div id="main-container">
  <div id="left-container">
    <img src="./image/hy.gif" alt="Your Image">
  </div>
  <div id="right-container">
    <button class="button" id="button1"><a href="index.php"><b>HOME</b></a></button>
    <button class="button" id="button2"><a href="regis.php"><b>REGISTER</b></a></button>
    <button class="button" id="button3"><a href="login.php"><b>LOG-IN</b></a></button>
    <button class="button" id="button4"><a href="about.php"><b>ABOUT</b></a></button>
  </div>
</div>

<script>
  // Function to animate buttons
  function animateButtons() {
    const buttons = document.querySelectorAll('.button');
    buttons.forEach((button, index) => {
      setTimeout(() => {
        button.style.opacity = '1';
        button.style.transform = 'translateX(0)';
      }, index * 200); // Adjust the delay as needed
    });
  }

  // Trigger the animation when the page loads
  window.onload = animateButtons;
</script>


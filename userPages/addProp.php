<?php
include 'userNav.php';

?>
<link rel="stylesheet" href="CSS/addProp.css">
<div class="form-container">
    <form action="#" method="POST" enctype='multipart/form-data' onsubmit="return validateForm()">
      <h2>Add Property</h2>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="contact">Contact No:</label>
      <input type="tel" id="contact" name="contact" required>

      <label for="picture">Land or House Picture:</label>
      <input type="file" id="picture" name="picture" accept="image/*" required>

      <label for="price">Price:</label>
      <input type="text" id="price" name="price" required>

      <input type="submit" value="Submit" name="propSubmit" >
    </form>
  </div>

  <script>
    function validateForm() {
      var nameInput = document.getElementById('name');
      var emailInput = document.getElementById('email');
      var contactInput = document.getElementById('contact');
      var pictureInput = document.getElementById('picture');
      var priceInput = document.getElementById('price');
      var price = parseInt(priceInput.value.replace(/,/g, ''), 10);

      // Validate Name
      if (!/^[a-zA-Z ]+$/.test(nameInput.value)) {
        alert('Please enter a valid name (only letters and spaces).');
        return false;
      }

      // Validate Email
      if (!/^\S+@\S+\.\S+$/.test(emailInput.value)) {
        alert('Please enter a valid email address.');
        return false;
      }

      // Validate Contact No
      if (!/^\d{10}$/.test(contactInput.value)) {
        alert('Please enter a valid 10-digit contact number.');
        return false;
      }

      // Validate Picture (check if it's an image file)
      var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
      if (!allowedExtensions.exec(pictureInput.value)) {
        alert('Please upload a valid image file (jpg, jpeg, png, gif).');
        return false;
      }

      // Validate Price (minimum 10,000)
      var price = parseInt(priceInput.value, 10);
      if (isNaN(price) || price < 10000) {
        alert('Please enter a valid price (minimum 10,000).');
        return false;
      }
      var formattedPrice = price.toLocaleString('en-IN');

       // Update the input field with the formatted price
      priceInput.value = formattedPrice;

      // If all validations pass, the form will be submitted
      return true;
    }
  </script>
  <?php
  if(isset($_POST['propSubmit'])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $price = $_POST["price"];

    // landpic
    $landpic = $_FILES['picture']['name'];
	$pictureFileType = strtolower(pathinfo($landpic,PATHINFO_EXTENSION));

    // valid file extensions for images
	$extensions_arr = array("jpg","jpeg","png","gif");

    $check = "select * from registration where id  = '$cand_id'";
	$query_run = mysqli_query($con,$check);

    $row = mysqli_fetch_array($query_run);

    if($email === $row['email']){

        $insertquery1 = "insert into property(`name`, `email`, `contact`,`price`) values(' $name','$email','$contact','$price')";
        $iquery1 = mysqli_query($con,$insertquery1);

        if( in_array($pictureFileType,$extensions_arr)){
            // Upload thumbnail and store in database
			if(move_uploaded_file($_FILES['picture']['tmp_name'],'dbimg/'.$landpic)){
                $updatequery1 = "update property set `landPic` ='$landpic' WHERE email ='$email'  ORDER BY id DESC LIMIT 1";
                if(mysqli_query($con, $updatequery1)){
                    ?>
                     <script>
                        alert("Hurrrey!!You added property for sell!!");
                     </script>
                    <?php
            }
            else{
                    ?>
                       <script>
                          console.log("fail to update thumbnail");
                       </script>
                       <?php
            }
                

            }
        }


    }else{
        ?>
        <script>
            alert("give your registered emailId");

        </script>
        <?php
    }


  }
  
  include 'userFooter.php';
  ?>

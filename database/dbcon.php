<?php

$server="localhost";
$user="root";
$password="";
$db="hyscaler";


$con = mysqli_connect($server,$user,$password,$db);


if($con){
	?>
	<script>
		console.log("connection sucessful , ready to register");
	</script>
	<?php
}
else{
	?>
	<script>
		alert(" no connection ");
	</script>
	<?php

}



?>
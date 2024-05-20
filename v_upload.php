<?php
session_start();
$uid=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Meal Mate</title>
</head>
<body>
	<div class="container" id="container">
		<div class="overlay-container">
		<h1><center> Upload Menu<center></h1>
			<form action="#" method="post">
				<input id="Tiffin_Type" name="Tiffin_Type" placeholder="Tiffin Type">
				<input id="Meal_Type" name="Meal_Type" placeholder="Meal Type">
				<input id="Bread" name="Bread" placeholder="Bread"/>
                <input id="Subji1" name="Subji1" placeholder="Subji 1"/>
                <input id="Subji2" name="Subji2" placeholder="Subji 2"/>
                <input id="Rice" name="Rice" placeholder="Rice"/>
                <input id="Dal" name="Dal" placeholder="Dal"/>
                <input id="Accessories" name="Accessories" placeholder="Accessories"/>
				<input id="Price" name="Price" placeholder="Price"/>
				<button name="submit">submit</button>
			
	
				
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername, $username, $password,$db);


if(isset($_POST['submit']))
{
	
	$q="insert into lunch(Username,Tiffin_Type,Meal_Type,Bread,Subji1,Subji2,Rice,Dal,Accessories,Price) VALUES ('$uid','".$_POST['Tiffin_Type']."','".$_POST['Meal_Type']."','".$_POST['Bread']."','".$_POST['Subji1']."','".$_POST['Subji2']."','".$_POST['Rice']."','".$_POST['Dal']."','".$_POST['Accessories']."','".$_POST['Price']."')";
	$query = mysqli_query($conn, $q);

	if(!$query)
	{
		echo"<script>alert('not submit');</script>";
	}
	else
	{
		echo"<script>alert('sucessful submit');</script>";
		header('location:v_upload.php');
	}
}
?>


			</form>
		</div>
		<div class="form-container log-in-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
				<h1>Meal Mate</h1>
                <p>Your Meal Partner</p>
				
				<p>This project is made by Aum Thanky</p>	
				</div>
			</div>
		</div>
	</div>
</body>
</html>


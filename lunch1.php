<?php
session_start();
$uid=$_SESSION['username'];
$mealtype="lunch";
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);
$q="delete from lunch where Username='$uid' and Meal_Type='Lunch'";
$query = mysqli_query($conn, $q);
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
		<h1><center> Upload Lunch Menu<center></h1>
			<form action="#" method="post">
				<input id="Tiffin_Type" name="Tiffin_Type" placeholder="Tiffin Type">
				<!--<input id="Meal_Type" name="Meal_Type" placeholder="Meal Type">!-->
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
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);
if(isset($_POST['submit']))
{
    $q1="insert into lunch(Username,Tiffin_Type,Meal_Type,Bread,Subji1,Subji2,Rice,Dal,Accessories,Price) VALUES ('$uid','".$_POST['Tiffin_Type']."','$mealtype','".$_POST['Bread']."','".$_POST['Subji1']."','".$_POST['Subji2']."','".$_POST['Rice']."','".$_POST['Dal']."','".$_POST['Accessories']."','".$_POST['Price']."')";
    $query1 = mysqli_query($conn, $q1);

	if(!$query1)
	{
		echo"<script>alert('not submit');</script>";
	}
	else
	{   echo "done";
		echo"<script>alert('sucessful submit');</script>";
        header('location:test1.php');
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

<script language="javascript" type="text/javascript">

	function checkdetails(){
		var Email = document.getElementById('Email');
		var Password = document.getElementById('Password');
		var Confirm_password = document.getElementById('Confirm_Password');
		if(Email.value == "" ){
			alert("Please Enter Email_Id.");
			Email.focus(); // set the focus to this input
			return false;
		}
		
		var EmailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
		if(!Email.value.match(EmailExp)){
			alert("Please Enter Your Correct Email Address.");
			Email.value="";
			Email.focus(); // set the focus to this input
			return false;
		}
		var Username = document.getElementById('Username');
		   if(Username.value.length < 11)
		{
			   alert('Please Enter Minimum 10 Characters for Username.');
			   Username.focus();
			   return false;
		}
		
		if(Username.value == ""){
			alert('Please Enter Enrollment No.');	
			Username.focus();
			return false;
		}
		
	
		   if(Password.value.length < 8)
		{
			   alert('Please Enter Minimum 8 Character For Password.');
			   Password.focus();
			   return false;
		}
		if(Password.value == ""){
			alert('Please Enter Password.');	
			Password.focus();
			return false;
		}
		if (Confirm_password.value == "" ){
			alert("Please enter confirm Password");
			Confirm_password.focus();		
			return false;
		}
				
		if ((Password.value) != (Confirm_password.value)){
			alert("Password and Confirm Password should be same! Re-enter confirm-password!");
			Confirm_password.value = "";
			Confirm_password.focus();	   
			return false;
		}	
		return true;
	}
</script>
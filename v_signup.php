<?php
session_start();
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
			<form action="#" method="post">
				<h1>Sign Up</h1>
				<input id="CName" name="CName" placeholder="Company Name" />
				<input id="Name" name="Name" placeholder="Name" />
				<input id="Mobile_No" name="Mobile_No" placeholder="Mobile No"/>
				<input id="Address" name="Address" placeholder="Address"/>
				<input id="Type" name="Type" placeholder="Type of Dish"/>
				<input id="Username" name="Username" placeholder="Username" />
				<input type="password" id="Password" name="Password" placeholder="Password" />
				<input type="password" id="Confirm_Password" name="Confirm_Password" placeholder="Confirm_Password" />
				<br>
				<input type="submit" name="submit" value="submit" onClick="return checkdetails();"/>
				<?php
//echo "TRYING CONNECTING WITH MYSQL DATABASE LOGIN";
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);
/*if (!$conn)
{
   echo "Connection failed";
}
echo "<br>";
echo "Connected successfully";
echo "<br>";*/
if(isset($_POST['submit']))
{
	
	$q="insert into v_signup(CName,Name,Mobile_No,Address,Type,Username,Password,Confirm_Password) VALUES ('".$_POST['CName']."','".$_POST['Name']."','".$_POST['Mobile_No']."','".$_POST['Address']."','".$_POST['Type']."','".$_POST['Username']."','".$_POST['Password']."','".$_POST['Confirm_Password']."')";
	$query = mysqli_query($conn, $q);
	if(!$query)
	{
		echo"<script>alert('not submit');</script>";
	}
	else
	{
		echo"<script>alert('sucessful submit');</script>";
		header('location:v_login.php');
	}
}
?>


			</form>
		</div>
		<div class="form-container log-in-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Meal Mate</h1>
					<h2>Your Meal Partner</h2>
					<p>This project is made by Aum Thanky.</p>
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
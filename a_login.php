<?php
session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="user";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);


    /*if(!$conn)
    {
        echo "Unsuccessful";
    }
    else{
        echo "Successful";
    }*/

    if(isset ($_POST["submit"]))
    {
       
        $q = ("select * from a_signup where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'");     
        $query = mysqli_query($conn, $q);
        $count=mysqli_num_rows($query);
        $row = mysqli_fetch_assoc($query);
        $count=mysqli_num_rows($query);       
        if($count>0)
        {   
            $_SESSION['name']=$row['Name'];
            $_SESSION['mobile_no']=$row['Mobile_No'];
            $_SESSION['email']=$row['Email'];
            

            header('location:a_dashboard.php');
        }
        else{
            echo "Invalid login";
        }
        
    }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>MealMate</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Admin Login</h1><br><br><br>
				<input id="Username" name="Username" placeholder="Username" />
				<input id="Password" name="Password" placeholder="Password" /><br>
				<!-- <a href="forgotpassword.php">Forgot your password?</a> -->
				<!--<input type="submit" name="login" value="Login" onClick="return checkdetails();" /><br><br>-->
				<button name="submit">submit</button>
				<br><br>
        
                
                <label>Dont have an account?</label><a href='asignup.php'>Click Here</a>
			</form>
        

		</div>
		<div class="overlay-container">
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
		
		var password = document.getElementById('password');
	
		
		
	
		var mobile = document.getElementById('mobile');
	   	
		var phExp = /^[6-9][0-9]{9}$/;

		if(mobile.value == "")
		{
			alert('Please Enter PhoneNo.');	
			mobile.focus();
			return false;
		}

		if(!mobile.value.match(phExp))
		{
			alert("Please Enter Your Correct Phone Number.");
			mobile.value="";
			mobile.focus(); 
			return false;
		}

	
        if(password.value == ""){
			alert('Please Enter Password.');	
			password.focus();
			return false;
		}
		if(password.value.length < 8)
		{
			alert('Please Enter Minimum 8 Character For Password.');
			password.focus();
			return false;
		}
		
		// if(confirmpassword.value == "" ){
		// 	alert("Please enter confirm Password");
		// 	confirmpassword.focus();		
		// 	return false;
		// }
				
		// if((password.value) != (confirmpassword.value)){
		// 	alert("Password and Confirm Password should be same! Re-enter confirm-password!");
		// 	confirmpassword.value = "";
		// 	confirmpassword.focus();	   
		// 	return false;
		// }	

		
	
		
		return true;
	}
</script>
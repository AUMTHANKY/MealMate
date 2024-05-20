<?php
session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="user";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);

    if(isset ($_POST["submit"]))
    {
       
        $q = ("select * from v_signup where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'");     
        $query = mysqli_query($conn, $q);
        $count=mysqli_num_rows($query);
        $row = mysqli_fetch_assoc($query);
        $count=mysqli_num_rows($query);       
        if($count>0)
        {   
            $_SESSION['name']=$row['Name'];
            $_SESSION['mobile_no']=$row['Mobile_No'];
            $_SESSION['address']=$row['Address'];
           
            $_SESSION['username']=$_POST['Username'];

            header('location:v_profile.php');
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
				<h1>Vendor Login</h1><br><br><br>
				<input type='text' name="Username" id="Username" placeholder="Username" />
				<input type='password' name="Password" id="Password" placeholder="Password" /><br>
				<!-- <a href="forgotpassword.php">Forgot your password?</a> -->
                <button name="submit">submit</button>
                <br><br>
        
                
                <label>Dont have an account?</label><a href='v_signup.php'>Click Here</a>
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



<?php

// require_once('database.php');
    
//     if(isset ($_POST["login"]))
//     {
//         $username = $_REQUEST['Username'];
//         $password = $_REQUEST['Password'];
//         /*echo $Username;
//         echo $Password;*/
//         $q = ("select * from user where phone='$username' and Password='$password'");     
//         $query = mysqli_query($conn, $q);
//         $count=mysqli_num_rows($query);
//         $row = mysqli_fetch_assoc($query);
//         $count=mysqli_num_rows($query);       
//         if($count>0)
//         {   
//             // $_SESSION['name']=$row['Name'];
//             // $_SESSION['email']=$row['Email'];
//             // $_SESSION['department']=$row['Department'];
//             // $_SESSION['enrollment']=$row['Username']; 
//             header('location:dashboard.php');
//         }
//         else{
//             echo "Invalid login";
//         }
        
//         /*while
//         $rowcount = mysqli_num_rows($query);
//         if($rowcount>0)
//         {
//             header('location:dashboard.html');
//            // echo "Login Successful";
//         }
//         else{
//             echo "Invalid Login";
//         }*/
//     }
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
				<h1>Login</h1><br><br><br>
				<input type="submit" name="user" value="User" /><br><br>
                <?php
                if(isset($_POST['user']))
                {
                    header('location:u_login.php');
                }
                ?>

                <input type="submit" name="vendor" value="Vendor" /><br><br>
                <?php
                if(isset($_POST['vendor']))
                {
                    header('location:v_login.php');
                }

                ?>

                <input type="submit" name="admin" value="Admin" /><br><br>
                <?php
                if(isset($_POST['admin']))
                {
                    header('location:a_login.php');
                }

                ?>
                
                <label>Dont have an account?</label><a href='signup.php'>Click Here</a>
                
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
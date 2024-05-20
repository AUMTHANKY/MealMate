<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);
$c=$_SESSION['username'];


$sql="select * from cart where Username=$c";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
//print_r($row);


if(isset($_POST['submit']))
{
	$quantity=$_POST['t1'];
	
	$sql="update cart set quantity='$quantity' where Username='$c'";
	if(mysqli_query($conn,$sql))
	{
		header("location:cart.php");
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Categories</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
<!-- CuFon: Enables smooth pretty custom font rendering. 100% SEO friendly. To disable, remove this section 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
 CuFon ends -->
</head>
<body>
<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php" class="nobg">
	  <i>Meal Mate</i></a></h1></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
		      <li class="active"><a href="categories.php">Categories</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="myorder.php">My Orders</a></li>         
        </ul>
      </div>
	  <br><br><br><br><br>
	        <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  <center><h3><a href="categories.php">Categories</a></h3></center>
	  <div class="cate">
	  <table width="1324" border="0">
    <div class="cate">
	  	<form method='post'>
		  <table border=0>
			<tr><td>Quantity</td><td>:</td><td><input type="text" name="t1" value="<?php echo $row['quantity'];?>"/></td></tr>
			<tr><td colspan=3><center><input type="submit" name="submit" value='update' /></center></td></tr>
		  </table>

		</form>

		</div>
 <?php

// $c=$_GET['id'];
$c=$_SESSION['username'];
// $b=$_SESSION['Bread'];
// $s1=$_SESSION['Subji1'];
// $s2=$_SESSION['Subji2'];
// $r=$_SESSION['Rice'];
// $d=$_SESSION['Dal'];
// $a=$_SESSION['Accessories'];
// $p=$_SESSION['Price'];


$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);

//$q="select * from lunch"; 
$q="select * from cart where Username='$c' ";
$query = mysqli_query($conn, $q);



mysqli_close($conn);
?>


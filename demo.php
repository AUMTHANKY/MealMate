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
<?php

session_start();
$c=$_GET['id'];
$p=$_SESSION['Price'];
$q1=1;
$a=$p*$q;


$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername, $username, $password,$db);

$q="select * from lunch where Username='$c'  and Meal_Type='Lunch' and Date=curdate();";
$query = mysqli_query($conn, $q);

echo "<table border='1' style='text-align:center;'>
<tr >
<td style='padding:10px;'>Username</td>
<td style='padding:10px;'>Meal Type</td>
<td style='padding:10px;'>Tiffin Type</td>
<td style='padding:10px;'>Price</td>
<td style='padding:10px;'>Quantity</td>
<td style='padding:10px;'>Amount</td>

</tr>
";
 
while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['Username'] . "</td>";
echo "<td>" . $row['Meal_Type'] . "</td>";
echo "<td>" . $row['Tiffin_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $q1 . "</td>";
echo "<td>" . $a . "</td>";
echo "<td> <input type="text", placeholder="hello"></input></td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>

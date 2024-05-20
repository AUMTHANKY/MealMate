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
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
		      <li class="active"><a href="categories.php">Categories</a></li>
          <li><a href="order.php">My Orders</a></li>         
        </ul>        
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
$ab=$_SESSION['username'];
$servername = "localhost";
$username = "root";
$password = "";
$db = "user";
$conn = mysqli_connect($servername, $username, $password,$db);

//$q="select * from v_signup where Type='Punjabi'";
$q="select * from v_signup where Type='Gujarati'";
$query = mysqli_query($conn, $q);



echo "<table border='1' style='text-align:center;'>
<tr >
<td style='padding:10px;'>Company Name</td>
<td style='padding:10px;'>Vendor Name</td>
<td style='padding:10px;'>Mobile No</td>
<td style='padding:10px;'>Address</td>
<td style='padding:10px;'>Username</td>
<td style='padding:10px;'>Lunch</td>
<td style='padding:10px;'>Dinner</td>
</tr>
";
while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['CName'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Mobile_No'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td><a href='dlunch.php?id=".$row['Username']."'>Lunch</a></td>";
echo "<td><a href='ddinner.php?id=".$row['Username']."'>Dinner</a></td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>


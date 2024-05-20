<?php
session_start();
$a=$_SESSION['username'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Orders</title>
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
					<li ><a href="v_upload.php">Upload</a></li> 
		  		<li ><a href="v_profile.php">Profile</a></li>
          <li class="active"><a href="v_order.php">My Orders</a></li>
        </ul>
      </div>
	  <br><br><br><br><br>
	        <div class="clr"></div>
    </div>
    </body>
    </html>
<?php
//$c=$_GET['id'];
$servername = "localhost";
$username = "root";
$password = "";
$db="user";
$conn = mysqli_connect($servername,$username,$password,$db);

//$q="select * from v_order where Username='$c' ORDER BY Time DESC LIMIT 1";
$q="select * from v_order where Username='$a' ORDER BY Time DESC LIMIT 1";

//$q="select * from v_order";
$query = mysqli_query($conn, $q);
echo "<table border='1' style='text-align:center;'>
<tr >
<td style='padding:10px;'>Username</td>
<td style='padding:10px;'>Customer name</td>
<td style='padding:10px;'>Mobile No</td>
<td style='padding:10px;'>Address</td>
<td style='padding:10px;'>Meal Type</td>
<td style='padding:10px;'>Price</td>
<td style='padding:10px;'>Quantity</td>
<td style='padding:10px;'>Amount</td>

</tr>
";

while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['Username'] . "</td>";
echo "<td>" . $row['CName'] . "</td>";
echo "<td>" . $row['Mobile_No'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['Meal_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td>" . $row['Qty'] . "</td>";
echo "<td>" . $row['Amt'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
    //$q="SELECT * FROM V_ORDER WHERE Username='$c'";

				
?>
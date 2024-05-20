
<?php
session_start();
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
		      <li><a href="categories.php">Categories</a></li>
          <li class="active"><a href="cart.php">Cart</a></li>
          <li><a href="order.php">My Orders</a></li>         
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
  <tr></tr><br>
<?php
$c=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername,$username,$password,$db);
$db1="user";
$conn1 = mysqli_connect($servername,$username,$password,$db1);


$q="select * from lunch where Username='$c' and Date=curdate() ORDER BY Time DESC LIMIT 1";
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
$q1=0;

//$q2=$q1*$Price;
$amt=0;
$q2=0;
$quantity1=1;
$answer;
while($row = mysqli_fetch_assoc($query))
{
  //$Price=$row['Price'];
echo "<tr >";
echo "<td >" . $row['Username'] . "</td>";
echo "<td>" . $row['Meal_Type'] . "</td>";
echo "<td>" . $row['Tiffin_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
//echo $q2;
echo "<td><input type='text' id='number' name='quantity1' value='$q1' size='5' onkeyup=''/><input type='button' onclick='incrementValue()' value='+' size='5' /><input type='button' onclick='decrementValue()' value='-' /></td>";
//echo "<td> <input type='button' onclick='incrementValue()' value='+' size='5' /></td>";
//echo "<td> <input type='button' onclick='decrementValue()' value='-' /></td>";
echo "<td><input type='text' id='answer' name='quantity1' value='$q2' size='5' onkeyup='' readonly/></td>";
//echo "<td><input type=button onclick='multiplyValue()' value='Amount' /></td>";

//echo "<td><div class='value-button' id='decrease' onclick='decreaseValue()' value='Decrease Value'>-</div></td>";
//echo "<td><div class='value-button' id='decrease' onclick='decreaseValue()' value='Decrease Value'>-</div></td>";
//echo "<td><button span id='qty'>Quantity</button></td>";


echo "</tr>";
}
echo "</table>";
//echo "<button name='submit'>submit</button>";





mysqli_close($conn);


?>
<script>
    function incrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 0 : value;
        value=value*100;
        document.getElementById('answer').value = value;

    }
    function decrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('number').value = value;
        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 0 : value;
        value=value*100;
        document.getElementById('answer').value = value;
    }
   
</script>
<html>
<body>
<button name="submit">submit</button>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db1="user";
$conn1 = mysqli_connect($servername,$username,$password,$db1);
if(isset($_POST['submit']))
{
  $qt="insert into v_order(Username,Meal_Type,Tiffin_Type,Price) VALUES ( '".$_POST['Username']."','".$_POST['Meal_Type']."','".$_POST['Tiffin_Type']."','".$_POST['Price']."')";
  $query = mysqli_query($conn1, $qt);
    
    header('location:order.php');
}
?>


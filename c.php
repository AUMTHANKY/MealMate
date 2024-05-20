<?php
session_start();
$c=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername, $username, $password,$db);

$q="select Meal_Type,Tiffin_Type,Price from lunch where Username='$c'";
$query = mysqli_query($conn, $q);
echo "<table border='1' style='text-align:center;'>
<tr >

<td style='padding:10px;'>Meal Type</td>
<td style='padding:10px;'>Tiffin Type</td>
<td style='padding:10px;'>Price</td>
<td style='padding:10px;'>Quantity</td>
<td style='padding:10px;'>Total</td>

</tr>
";
while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['Meal_Type'] . "</td>";
echo "<td>" . $row['Tiffin_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";


echo "</tr>";
}
Meal type
tiffin type
vendor name
price
qty button
amt
?>
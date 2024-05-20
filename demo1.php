<?php
$c=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername, $username, $password,$db);


$q="select * from lunch where Username='$c' and Meal_Type='Lunch' and Date=curdate()"; 
//$q="select * from lunch where Username='$c' and Meal_Type='Dinner' and Date=curdate()";
$query = mysqli_query($conn, $q);
echo "<table border='1' style='text-align:center;'>
<tr >
<td style='padding:10px;'>Bread</td>
<td style='padding:10px;'>Subji 1</td>
<td style='padding:10px;'>Subji 2</td>
<td style='padding:10px;'>Rice</td>
<td style='padding:10px;'>Dal</td>
<td style='padding:10px;'>Accessories</td>
<td style='padding:10px;'>Price</td>

</tr>
";

while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['Bread'] . "</td>";
echo "<td>" . $row['Subji1'] . "</td>";
echo "<td>" . $row['Subji2'] . "</td>";
echo "<td>" . $row['Rice'] . "</td>";
echo "<td>" . $row['Dal'] . "</td>";
echo "<td>" . $row['Accessories'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";

echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>


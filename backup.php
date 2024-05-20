
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
</body>
</html>
<?php
$c=$_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername,$username,$password,$db);

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
$q1=1;
$q2=1;
while($row = mysqli_fetch_assoc($query))
{
echo "<tr >";
echo "<td >" . $row['Username'] . "</td>";
echo "<td>" . $row['Meal_Type'] . "</td>";
echo "<td>" . $row['Tiffin_Type'] . "</td>";
echo "<td>" . $row['Price'] . "</td>";
echo "<td><input type='text' id='number' name='quantity1' value='$q1' onkeyup=''/></td>";
echo "<td><input type=button onclick='incrementValue()' value='Increase' /></td>";
echo "<td><input type=button onclick='decrementValue()' value='Decrease' /></td>";
echo "<td><input type=button onclick='multiplyValue()' value='Multiply' /></td>";
echo "<td><input type='text' id='number' name='quantity1' value='$q2' onkeyup=''/></td>";
//echo "<td><button span id='qty'>Quantity</button></td>";


echo "</tr>";
}
echo "</table>";



mysqli_close($conn);


?>
<script>
    function incrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
    }
    function decrementValue()
    {
        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 0 : value;
        value--;
        document.getElementById('number').value = value;
    }
    function multiplyValue()
    {
        var value = parseInt(document.getElementById('number').value, 0);
        value = isNaN(value) ? 0 : value;
        value=value*100;
        document.getElementById('number').value = value;
    }
</script>

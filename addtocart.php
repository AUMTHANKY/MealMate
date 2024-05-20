<?php
session_start();
$id=$_GET['id'];
$uid=$_SESSION['username'];
// echo $a;
$servername = "localhost";
$username = "root";
$password = "";
$db = "vendor";
$conn = mysqli_connect($servername, $username, $password,$db);

$q="select * from lunch where Id = $id";
$query = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($query);

// print_r($row);

// echo "<table border='1' style='text-align:center;'>
// <tr >
// <td style='padding:10px;'>Bread</td>
// <td style='padding:10px;'>Subji 1</td>
// <td style='padding:10px;'>Subji 2</td>
// <td style='padding:10px;'>Rice</td>
// <td style='padding:10px;'>Dal</td>
// <td style='padding:10px;'>Accessories</td>
// <td style='padding:10px;'>Price</td>
// <td style='padding:10px;'>Cart</td>

// </tr>
// ";

// // while($row = mysqli_fetch_assoc($query))
// // {
// echo "<tr >";
// echo "<td >" . $row['Bread'] . "</td>";
// echo "<td>" . $row['Subji1'] . "</td>";
// echo "<td>" . $row['Subji2'] . "</td>";
// echo "<td>" . $row['Rice'] . "</td>";
// echo "<td>" . $row['Dal'] . "</td>";
// echo "<td>" . $row['Accessories'] . "</td>";
// echo "<td>" . $row['Price'] . "</td>";
// // echo "<td><a href='addtocart.php?id=".$row['Id']."'>Cart</a></td>";

// echo "</tr>";
// // }
// echo "</table>";

$b=$row['Bread'];
$s1=$row['Subji1'];
$s2=$row['Subji2'];
$r=$row['Rice'];
$d=$row['Dal'];
$a=$row['Accessories'];
$p=$row['Price'];

echo $b,$s1,$s2,$r,$d,$a,$p;

$db1= "user";
$conn1 = mysqli_connect($servername, $username, $password,$db1);

//$c = "insert into cart(Username,Tiffin_Type,Meal_Type,Bread,Subji1,Subji2,Rice,Dal,Price) VALUES ('$uid','".$row['Tiffin_Type']."','".$row['Meal_Type']."','".$row['Bread']."','".$row['Subji1']."','".$row['Subji2']."','".$row['Rice']."','".$row['Dal']."','".$row['Price']."')";
$c="insert into cart(Username,Tiffin_Type,Meal_Type,Price) VALUES ('$uid','".$row['Tiffin_Type']."','".$row['Meal_Type']."','".$row['Price']."')";
$que = mysqli_query($conn1,$c);
$wer="Select * from cart";
$werty=mysqli_query($conn1,$wer);
$resp=mysqli_fetch_assoc($werty);
print_r($resp);
header('location:cart.php');
?>
<?php
session_start();


$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="vendor";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($POST['submit']))
{
    $Username=$_POST['Username'];
    $sql="Select * from lunch where Id='$Id'";
    $result=mysqli_query($conn,$sql);
    echo "<table border=1>";
while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo "Userame:".$row2['Username']."</td><td>";
    echo "Tiffin Type:".$row2['Tiffin_Type']."</td><td>";
    echo "Meal Type:".$row2['Meal_Type']."</td><td>";
    echo "Bread:".$row2['Bread']."</td><td>";
    echo "Subji 1:".$row2['Subji1']."</td><td>";
    echo "Subji 2:".$row2['Subji2']."</td><td>";
    echo "Rice:".$row2['Rice']."</td><td>";
    echo "Dal:".$row2['Dal']."</td><td>";
    echo "Accessories:".$row2['Accessories']."</td><td>";
    echo "Price:".$row2['Price']."</td><td>";
    echo "Quantity:".$row2['Qty']."</td><td>";
    echo "Amount:".$row2['Amt']."</td><td>";
    echo "Time:".$row2['Time']."</td><td>";
    echo "<td><a href=edit.php?id1=".$row2['Id'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Id'].">Delete</a></td></tr>";
}
}
else{
$sql="Select * from lunch";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
echo "<th><a href=a_dashboard.php?sort=Name>Username</a></th>";
echo "<th><a href=a_dashboard.php?sort=Name>Tiffin Type</a></th>";
echo "<th><a href=a_dashboard.php?sort=Email>Meal Type</a></th>";
echo "<th><a href=a_dashboard.php?sort=Department>Bread</a></th>";
echo "<th><a href=a_dashboard.php?sort=Username>Subji 1</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Subji 2</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Rice</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Dal</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Accessories</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Price</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Quantity</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Amount</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Time</a></th>";

if(isset($_GET['sort']))
{
    $sql="Select * from lunch order by Id";
    $result=mysqli_query($conn,$sql);
    while($row2=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>";
        echo "Userame:".$row2['Username']."</td><td>";
        echo "Tiffin Type:".$row2['Tiffin_Type']."</td><td>";
        echo "Meal Type:".$row2['Meal_Type']."</td><td>";
        echo "Bread:".$row2['Bread']."</td><td>";
        echo "Subji 1:".$row2['Subji1']."</td><td>";
        echo "Subji 2:".$row2['Subji2']."</td><td>";
        echo "Rice:".$row2['Rice']."</td><td>";
        echo "Dal:".$row2['Dal']."</td><td>";
        echo "Accessories:".$row2['Accessories']."</td><td>";
        echo "Price:".$row2['Price']."</td><td>";
        echo "Quantity:".$row2['Qty']."</td><td>";
        echo "Amount:".$row2['Amt']."</td><td>";
        echo "Time:".$row2['Time']."</td><td>";
        echo "<td><a href=edit.php?id1=".$row2['Id'].">Edit</a></td>";
        echo "<td><a href=delete.php?id1=".$row2['Id'].">Delete</a></td></tr>";
    }
}


while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
    echo "Username:".$row2['Username']."</td><td>";
    echo "Tiffin Type:".$row2['Tiffin_Type']."</td><td>";
    echo "Meal Type:".$row2['Meal_Type']."</td><td>";
    echo "Bread:".$row2['Bread']."</td><td>";
    echo "Subji 1:".$row2['Subji1']."</td><td>";
    echo "Subji 2:".$row2['Subji2']."</td><td>";
    echo "Rice:".$row2['Rice']."</td><td>";
    echo "Dal:".$row2['Dal']."</td><td>";
    echo "Accesories:".$row2['Accessories']."</td><td>";
    echo "Price:".$row2['Price']."</td><td>";
    echo "Quantity:".$row2['Qty']."</td><td>";
    echo "Amount:".$row2['Amt']."</td><td>";
    echo "Time:".$row2['Time']."</td><td>";
    echo "<td><a href=edit.php?id1=".$row2['Id'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Id'].">Delete</a></td></tr>";
}
}
mysqli_close($conn);
?>
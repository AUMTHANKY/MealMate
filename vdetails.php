<?php
session_start();


$servername="localhost";
$username="root";
$password="";//password is always empty.
$database="user";

$conn=mysqli_connect($servername,$username,$password,$database);

if(isset($POST['submit']))
{
    $Username=$_POST['Username'];
    $sql="Select * from v_signup where Username='$Username'";
    $result=mysqli_query($conn,$sql);
    echo "<table border=1>";
    while($row2=mysqli_fetch_assoc($result))
    {
    echo "<tr><td>";
    echo "Company Name:".$row2['CName']."</td><td>";
    echo "Vendor Name:".$row2['Name']."</td><td>";
    echo "Mobile No:".$row2['Mobile_No']."</td><td>";
    echo "Address:".$row2['Address']."</td><td>";
    echo "Type:".$row2['Type']."</td><td>";
    echo "Username:".$row2['Username']."</td><td>";
    echo "Password:".$row2['Password']."</td><td>";
    echo "Confirm_Password:".$row2['Confirm_Password']."</td><td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
    }
}
else{
$sql="Select * from signup";
$result=mysqli_query($conn,$sql);
echo "<table border=1>";
//echo "<th><a href=a_dashboard.php?sort=Name>Company Name</a></th>";
echo "<th><a href=a_dashboard.php?sort=Name>Vendor Name</a></th>";
echo "<th><a href=a_dashboard.php?sort=Name>Mobile No</a></th>";
echo "<th><a href=a_dashboard.php?sort=Email>Address</a></th>";
echo "<th><a href=a_dashboard.php?sort=Department>Type</a></th>";
echo "<th><a href=a_dashboard.php?sort=Username>Username</a></th>";
echo "<th><a href=a_dashboard.php?sort=Password>Password</a></th>";
echo "<th><a href=a_dashboard.php?sort=Confirm_Password>Confirm_Password</a></th></th></th></th></th></th></tr>";

if(isset($_GET['sort']))
{
    $sql="Select * from signup order by Name";
    $result=mysqli_query($conn,$sql);
    while($row2=mysqli_fetch_assoc($result))
    {
    echo "<tr><td>";
    //echo $row2['CName']."</td><td>";
    echo $row2['Name']."</td><td>";
    echo $row2['Mobile_No']."</td><td>";
    echo $row2['Address']."</td><td>";
    echo $row2['Type']."</td><td>";
    echo $row2['Username']."</td><td>";
    echo $row2['Password']."</td><td>";
    echo $row2['Confirm_Password']."</td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
    }
}


while($row2=mysqli_fetch_assoc($result))
{
    echo "<tr><td>";
   // echo $row2['CName']."</td><td>";
    echo $row2['Name']."</td><td>";
    echo $row2['Mobile_No']."</td><td>";
    echo $row2['Address']."</td><td>";
    echo $row2['Type']."</td><td>";
    echo $row2['Username']."</td><td>";
    echo $row2['Password']."</td><td>";
    echo $row2['Confirm_Password']."</td>";
    echo "<td><a href=edit.php?id1=".$row2['Username'].">Edit</a></td>";
    echo "<td><a href=delete.php?id1=".$row2['Username'].">Delete</a></td></tr>";
}
}
mysqli_close($conn);
?>
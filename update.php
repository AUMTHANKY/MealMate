<?php
session_start();
    $Servername = "localhost";
    $Username = "root";
    $Password = "";
    $database="user";
    $conn = mysqli_connect($Servername , $Username, $Password, $database);

$id2= $_SESSION['Username'];

$sql="select * from signup where Username='$id2'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<form align='center' method='post'>

    Name:
	<input type="text" name="t1"  value="<?php echo $row['Name'];?>"/><br><br>
	Mobile No:
	<input type="text" name="t2"  value="<?php echo $row['Mobile_No'];?>"/><br><br>
	Email:
	<input type="text" name="t3" value="<?php echo $row['Email'];?>"/><br><br>
	Address:
	<input type="text" name="t4" value="<?php echo $row['Address'];?>"/><br><br>
	<input type="submit" name="submit" value='update' />

</form>
<?php

if(isset($_POST['submit']))
{
	$n=$_POST['t1'];
	$e=$_POST['t2'];
	$d=$_POST['t3'];
	$u=$_POST['t4'];

	$sql="update signup set Name='$n',Email='$e',Address='$a',Username='$u' where Username='$id2'";
	if(mysqli_query($conn,$sql))
	{
		header("location:profile.php");
	}
}
	
?>
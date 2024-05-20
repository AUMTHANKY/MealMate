
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
          
		  <li class="active"><a href="profile.php">Profile</a></li>
		  <li><a href="categories.php">Categories</a></li>
      <li><a href="cart.php">Cart</a></li>
      <li><a href="order.php">My Orders</a></li>

         <!-- <li><a href="stores.php">Stores</a></li>  --->
          
        </ul>
      </div>
	  <br><br><br><br><br>
	        <div class="clr"></div>
    </div>
    <body>
    </html>
    <?php
					session_start();
					$a=$_SESSION['name'];
					$b=$_SESSION['mobile_no'];
					$c=$_SESSION['email'];
					$d=$_SESSION['address'];
					echo "<center>";
					echo "<table border=1 width=400 height=400><tr><td>";
					echo "<center>Name:-</td><td></center><center>".$a."</center></td></tr>";
					echo "<tr><td><center>Mobile No:-</td><td></center><center>".$b."</center></td></tr>";
					echo "<tr><td><center>Email:-</td><td></center><center>".$c."</center></td></tr>";
					echo "<tr><td><center>Address:-</td><td></center><center>".$d."</center></td></tr>";
					echo "</table>";
					echo "</center>";
					?>
					<html>
					<body>
			
				
					</body>
					</html>
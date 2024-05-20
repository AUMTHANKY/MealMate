<?php
session_start();
$p=$_SESSION['Price'];
$t=$_SESSION['Type'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Categories</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style3.css" rel="stylesheet" type="text/css" />
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
          <li ><a href="cart.php">Cart</a></li>
          <li class"active"><a href="myorder.php">My Orders</a></li>         
        </ul>
      </div>
	  <br><br><br><br><br>
	        <div class="clr"></div>
    </div>
    </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
	  <center><h3><a href="order.php">My Orders</a></h3></center>
	  <div class="cate">
    <table border='1' style='text-align:center;'>
 <tr >
 <th>Product Name</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Price</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Quantity</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Amount</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Delivery Charge</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Tip</th>
 <td>Value</td>
 </tr>
 <tr >
 <th>Total</th>
 <td>Value</td>
 </tr>
 </table>
Price: p
Quantity:-qty
Amount: amt=qty*price
delivery charge:-d
tip:t
total-p+amt+d+t

 


      

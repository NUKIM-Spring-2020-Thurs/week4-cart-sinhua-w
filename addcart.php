<?php
	session_start();

	if(isset($_SESSION["id"]))
	{
   		$id=$_SESSION["id"];
   		$item=$_SESSION["item"];
   		$price=$_SESSION["price"];
   		$amount=$_SESSION["amount"];  

   		setcookie($id."[id]", $id, time()+3600);
   		setcookie($id."[item]", $item, time()+3600);
   		setcookie($id."[price]", $price, time()+3600);
   		setcookie($id."[amount]", $amount, time()+3600);
	}

	header("Location:cart.php");
?>
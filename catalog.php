<html>

<head>
	<?php
		session_start();
		
		if(isset($_POST["menu"]))
		{
			$_SESSION["amount"]=$_POST["amount"];
			$id=$_POST["menu"];
			$_SESSION["id"]=$id;
			switch(strtoupper($id)) 
			{
				case "a":
					$_SESSION["item"]="YSL-聖羅蘭 明彩輕墊粉底液";
					$_SESSION["price"]="1199";
					break;
				case "b":
					$_SESSION["item"]="YSL-聖羅蘭 逆齡保養粉底液";
					$_SESSION["price"]="1199";
					break;
				case "c":
					$_SESSION["item"]="YSL-聖羅蘭 黑鴉片香水";
					$_SESSION["price"]="2499";
					break;
				case "d":
					$_SESSION["item"]="YSL-聖羅蘭 明彩筆";
					$_SESSION["price"]="889";
					break;
				case "e":
					$_SESSION["item"]="YSL-聖羅蘭 超模絕密亮肌露";
					$_SESSION["price"]="1499";
					break;
				case "f":
					$_SESSION["item"]="YSL-聖羅蘭 蒙德里安五色眼影";
					$_SESSION["price"]="999";
					break;
			}
			header("Location:addcart.php");
		}
	?>
</head>

<body>
	<form action="addcart.php" method="post">
	<h2>商品目錄</h2>

	請選擇商品:<select name="menu">
		<option value="a">YSL-聖羅蘭 明彩輕墊粉底液~$1199</option>
		<option value="b">YSL-聖羅蘭 逆齡保養粉底液~$1199</option>
		<option value="c">YSL-聖羅蘭 黑鴉片香水~$2499</option>
		<option value="d">YSL-聖羅蘭 明彩筆~$889</option>
		<option value="e">YSL-聖羅蘭 超模絕密亮肌露~$1499</option>
		<option value="f">YSL-聖羅蘭 蒙德里安五色眼影~$999</option>
	</select>
	<input type="number" name="amount" min="1" value="1">
	<button type="submit">加入購物車</button>

	</form></br>
	<a href="cart.php">查看購物車</a>
</body>
</html>
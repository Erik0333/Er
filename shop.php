<!DOCTYPE html>
<html>
	<head>
		<title>Shop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		
			<?php  
					include("header.php");
					include("menu.php");
			?>	
			<?php 
				$link = mysqli_connect("localhost", "root", "usbw", "database");
				mysqli_set_charset($link,"utf8");
				$sql = "SELECT * FROM products";
				$result = mysqli_query($link, $sql);
				while ($r = mysqli_fetch_assoc($result)) {
			?>
					<div class="divaa">
						<a href="item.php?id=<?php echo $r['id']; ?>">
							<p class="p"><?php echo $r["name"]; ?></p>
						</a><br><br>
						<img src="<?php echo $r["img_src"]; ?>"><br><br>
						<p class="p"><?php echo $r["price"]; ?>$</p><br><br>
					</div>
			<?php
				}
			 ?>

			<?php  
					include("footer.php");
			?>
		
	</body>
</html>
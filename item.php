<?php  
$id = $_GET['id'];
$db = mysqli_connect("localhost", "root", "usbw", "database");
$sql = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($db, $sql);
$r = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Shop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style type="text/css">
		#arm2
		{
			color: black;
			padding: 10px; 
		}
		#arm3
		{
			color: black;
			padding: 20px;
		}
		#arm1
		{
			width: 240px;
			padding: 5px;
			float: left;
		}
		#arm
		{
			width: 893px;
			height: 369px;
			background-color: #D1D124;
			border: 5px solid white;
			border-radius: 20px;
			margin: 35px;
		}
	</style>
	</head>
	<body>
			<?php  
					include("header.php");
					include("menu.php");
			?>
			<div id="a">
				
				<div id="arm">

					<h2 id="arm2"><?php echo $r['name']; ?> <?php echo $r['price']; ?>$</h2>
					<img src="<?php echo $r['img_src']; ?>" id="arm1">
					<p id="arm3"><?php echo $r['description'] ?></p>

				</div>

			</div>

			<?php  
					include("footer.php");
			?>
	</body>
</html>

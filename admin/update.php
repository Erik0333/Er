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
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">	
			<h1>Update product <?php echo $_GET['id']; ?></h1>		

			<form action="action.php" method="post" enctype="multipart/form-data">
				<label for="name">Name</label><br>
				<input type="text" name="name" id="title" value="<?php echo $r['name']; ?>"> <br><br>

				<label for="description">Description</label><br>
				<textarea name="description" id="excerpt" rows="6" cols="46" > <?php echo $r['description']; ?></textarea><br><br>

				<label for="price">Price</label><br>
				<textarea name="price" id="content" rows="10" cols="46"><?php echo $r['price']; ?></textarea><br><br>				

				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

				<input type="submit" name="update">
			</form>			
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Administration</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<style type="text/css">
		body{
			background-color:#E7FAF9;
		}
	</style>
</head>
<body>
	<div class="main">
		<div class="header">
			ADMINISTRATION
		</div>		
		<div class="container">
			<div class="form">
				<form action="action.php" method="post" enctype="multipart/form-data">
					<label for="name">Name</label><br>
					<input type="text" name="name" id="title"> <br><br>

					<label for="description">Description</label><br>
					<textarea name="description" id="excerpt" rows="6" cols="46"></textarea><br><br>

					<label for="price">Price</label><br>
					<textarea name="price" id="price" rows="10" cols="46"></textarea><br><br>

					<input type="file" name="image"><br><br>

					<input type="submit" name="add">
				</form>
			</div>

			<div class="list">
				<?php  
					$db = mysqli_connect("localhost", "root", "usbw", "database");
					$sql = "SELECT * FROM products";
					$result = mysqli_query($db, $sql);				
				?>

				<table border="1">
					<tr>
						<td>id</td>
						<td>name</td>
						<td>price</td>
						<td>update</td>
						<td>delete</td>
					</tr>

					<?php  
					while( $r = mysqli_fetch_assoc($result) ){
					?>
						<tr>
							<td><?php echo $r['id']; ?></td>
							<td><?php echo $r['name']; ?></td>
							<td><?php echo $r['price']; ?></td>
							<td>
								<a href="update.php?id=<?php echo $r['id']; ?>">
									update
								</a>
							</td>
							<td>
								<a href="action.php?action=delete&id=<?php echo $r['id']; ?>">
									delete
								</a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>			
		</div>
	</div>
</body>
</html>
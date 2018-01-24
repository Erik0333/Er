<meta charset="utf-8">

<?php 
	// ------------------------ավելացնել---------
	if( isset($_POST["add"]) ){
	
		$name = $_POST["name"];
		$description = $_POST["description"];
		$price = $_POST["price"];

	if( isset($_FILES["image"]) ){
		
		$img_folder = "image/";
		$image_name = $_FILES["image"]["name"];
		$img_src = $img_folder . $image_name;
		$file_path = "../" . $img_src;


		move_uploaded_file($_FILES["image"]["tmp_name"], $file_path);
	}

	$db = mysqli_connect("localhost", "root", "usbw", "database");
	$sql = "
		INSERT INTO `products`
			(name, description , price , img_src)
		VALUES
			('$name', '$description', '$price', '$img_src')
	";
	$r = mysqli_query($db, $sql);

	if($r){
		echo "News Successfuly Inserted";
	}
	else{
		echo "db error";
	}
}

// ----------------------ԹԱՐՄԱՑՆԵԼ---------
	if( isset($_POST["update"]) ){

		$name = $_POST["name"];
		$description = $_POST["description"];
		$price = $_POST["price"];
		$id = $_POST['id'];

		$sql = "UPDATE `products`
				SET   `name` = '$name',
					  `description` = '$description',
					  `price` = '$price'
				WHERE `id` = $id
				";


		$link = mysqli_connect("localhost", "root", "usbw", "database");
				mysqli_set_charset($link,"utf8");

				$result = mysqli_query($link, $sql);


		if($result){
			echo "News Successfuly Updated";
		}
		else{
			echo "db error";
		}
	}

	//  -----------------------ջնջել----------
	if( isset($_GET['action']) && $_GET['action'] == "delete"){

		$idd = $_GET['id'];

		$db = mysqli_connect("localhost", "root", "usbw", "database");
		$sql = "DELETE FROM `products` WHERE `id` = $idd";
		$res = mysqli_query($db, $sql);

		if($res){
			echo "News deleted";
		}
		else{
			echo "db error";
		}

	}

 ?>
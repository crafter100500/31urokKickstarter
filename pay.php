<?php  
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
	$query = mysqli_query($connect, "SELECT * FROM posts WHERE id='{$_GET["id"]}'");
	
	$box = $query->fetch_assoc();
	$s = $box["donated"] + 10;
	$name = $_GET["username"];
	
	$update = "UPDATE posts SET donated = '".$s."' WHERE id='{$_GET["id"]}'";
	mysqli_query($connect, $update);
	header("Location: index1.php?user=$name");
?>
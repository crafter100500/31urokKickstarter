<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
	$update = "UPDATE posts SET title='".$_GET["title"]."', description='".$_GET["description"]."', goal='".$_GET["goal"]."', img='".$_GET["img"]."' WHERE id='".$_GET["id"]."'";
	mysqli_query($connect, $update);
	$name = $_GET["username"];
	header("Location: index1.php?user=$name");
?>
<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
	$delete = "DELETE FROM posts WHERE id='".$_GET["id"]."'";
	mysqli_query($connect, $delete);
	$name = $_GET["username"];
	header("Location: index1.php?user=$name");
?>
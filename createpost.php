<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
	$insert = "INSERT INTO posts (title, description, goal, img, place, user) 
	VALUES ('".$_GET["title"]."', '".$_GET["description"]."', '".$_GET["goal"]."', '".$_GET["img"]."', '".$_GET["place"]."', '".$_GET["user"]."')";
	$query_insert = mysqli_query($connect, $insert);
	$name = $_GET["username"];
	header("Location: index1.php?user=$name");
?>
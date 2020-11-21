<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
?>
<form action="createpost.php" method="GET">
	<input type="text" name="title">
	<input type="text" name="description">
	<input type="text" name="goal">
	<input type="text" name="img">
	<input type="text" name="place">
	<input type="text" name="user">
	<input type="hidden" name="username" value="<?php $_GET['username'];?>">
	<button>Send</button>
</form>
<a href="index.php">BACK</a>
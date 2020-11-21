<form action="update.php" method="GET">
	<input type="text" name="title" value="<?php echo $_GET['title']?>">
	<input type="text" name="description" value="<?php echo $_GET['description']?>">
	<input type="text" name="goal" value="<?php echo $_GET['goal']?>">
	<input type="text" name="img" value="<?php echo $_GET['img']?>">
	<input type="hidden" name="username" value="<?php echo $_GET['username'];?>">
	<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
	<button>SEND</button>
</form>
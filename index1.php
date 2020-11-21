<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarterNM");
		$query = mysqli_query($connect, "SELECT * FROM posts WHERE user='".$_GET["user"]."'");
	?>

</head>
<body>

<form action="createpost.php" method="GET">
	<input type="text" name="title">
	<input type="text" name="description">
	<input type="text" name="goal">
	<input type="text" name="img">
	<input type="text" name="place">
	<input type="text" name="user">
	<input type="hidden" name="username" value="<?php echo $_GET["user"];?>">
	<button>Send</button>
</form>
	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--><?php echo $query->num_rows;?></span></h4>
	<p></p>
		<div class="row mt-5">
			<?php for($i=0; $i< $query->num_rows; $i++){
				$box = $query->fetch_assoc();
			?>
				<div class="col-4" style="border: 1px solid black;">
					<div style=" text-align: center;" class="mx-auto mt-3">
						<?php echo '<img src="' . $box['img'] . '" class="w-100">' ?>
					</div>

					<div style="height: 390px;">
						<div style="text-align: center;" class="mx-auto">
							<h2><?php echo $box["title"];?></h2>
							<p><?php echo $box["description"];?></p>
						</div>
						<div class="mt-5 mx-auto" style="display: flex;">
							<p>by <?php echo $box["user"];?>, <?php echo $box["place"];?></p>
						</div>
						<div class="mt-2 mx-auto">
							<p><?php echo $box["goal"];?>$ goal</p>
							<p><?php echo $box["donated"];?>$ pladged</p>
						</div>
						<form action="pay.php" method="GET">
							<input type="hidden" name="id" value="<?php echo $box["id"];?>">
							<input type="hidden" name="username" value="<?php echo $_GET["user"];?>">
							<button>Back this project +10$</button>
						</form>	
						<form action="delete.php" method="GET">
							<input type="hidden" name="id" value="<?php echo $box["id"];?>">
							<input type="hidden" name="username" value="<?php echo $_GET["user"];?>">
							<button style="background-color: red;">DELETE</button>
						</form>
						<form action="change.php" method="GET">
							<input type="hidden" name="title" value="<?php echo $box['title'];?>">
							<input type="hidden" name="description" value="<?php echo $box['description'];?>">
							<input type="hidden" name="goal" value="<?php echo $box['goal'];?>">
							<input type="hidden" name="img" value="<?php echo $box['img'];?>">
							<input type="hidden" name="username" value="<?php echo $_GET["user"];?>">
							<input type="hidden" name="id" value="<?php echo $box["id"];?>">
							<button>CHANGE</button>
						</form>
					</div>
				</div>
			<?php 
				}
			?>
			<!--Вывести сами проекты здесь-->
		</div>
</div>
</body>
</html>
<!DOCTYPE html>
<?php
	require_once('class/bdd.class.php');
	require_once('class/categorie.class.php');
	require_once('model/categorie.model.php');
	$data = getAllCategorie();
	$testcat = new Categorie();
	$testcat->setNom('test');
	echo $testcat->getNom();
 ?>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ROCK'N'CLOTHES</title>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="style/main.css" rel="stylesheet">
		<script src="lib/jquery-1.11.2.min.js"></script>
		<script src="lib/jquery-migrate-1.2.1.min.js"></script>
		<script src="lib/bootstrap/js/jquery.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div id="content">
			 <?php include('view/header.php'); ?>
			
			<?php
				echo count($data);
				foreach($data as $cat)
				{
					echo $cat->getId() . ' ' . $cat->getNom();
				}
			?>
		</div>
		

	</body>
</html>
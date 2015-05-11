<!DOCTYPE html>
<?php
	require_once('class/bdd.class.php');
	$bd = new Bdd();
	$dbh = $bd->connexion();
	$req = "SELECT nom FROM sous_categorie";
	
	$stmt = $dbh->prepare($req);
	$stmt->execute();
	$res = $stmt->fetchAll();
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
				foreach($res as $data)
				{
					echo '<div class="col-md-12">' . $data[0] . '</div>';
				}
			?>
		</div>
		

	</body>
</html>
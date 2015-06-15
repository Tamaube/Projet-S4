<?php
	session_start();
	require_once('controller/controllerAccueil.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>ROCK'N'CLOTHES</title>
		<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="lib/carousel/bootstrap.min.css" rel="stylesheet">
		<link href="style/main.css" rel="stylesheet">
		
	</head>
	<body>
		<div id="content">
			 <?php include('view/header.php'); ?>
			<div class="col-lg-12" id="corps_page">
			</div>
			
		</div>
		<script src="lib/jquery-1.11.2.min.js"></script>
		<script src="lib/jquery-migrate-1.2.1.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.js"></script>
		<script src="js/main.js"></script>
		<script>
			$(document).ready(function(){
				$('#corps_page').load('./controller/controllerListeProduct.php', function(responseTxt, statusTxt, xhr){
										if(statusTxt == "error")
											alert("Error: " + xhr.status + ": " + xhr.statusText);
									});
			});
		</script>
	</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel();
  });
</script>

<div class="col-xs-12 col-md-8">
	<?php if($nbCoupCoeur > 0){ ?>
		<div class="col-xs-12 well well-large">
			<h3>Coup de coeur de l'équipe</h3>
			<hr></hr>
			<div class="row-fluid">
				<div class="carousel slide" id="myCarousel">
					<div class="carousel-inner">
						<?php
							for($i = 0; $i < $nbCoupCoeur; $i++)
							{
								if($i%4 == 0)
								{
									if($i==0)
									{
										echo ' <div class="item active">';
									} else {
										echo ' <div class="item">';
									} 
									
									echo '<ul class="thumbnails">';
								}
								
								$produit = $tabAllCoupCoeur[$i];
								echo '<li class="span3">';
									echo '<div class="thumbnail">';
										echo '<div class="img-container">';
											echo  "<img class='img-produit-preview' alt='image de produit' src='" . Config::IMG_REPERTORY_NAME . $produit->getPathFile() . "' />";
										echo '</div>';
									echo '</div>';
									echo '<form  class="formAddPanier" action="controller/controllerAddPanier.php" method="post">';
									echo $produit->getNom()  . '<br>';
										echo '<small class="red">' . $produit->getPrix() . ' €</small><br>';
										echo '<a class="btn btn-default link-without-style" data-url="controller/controllerSeeOneArticle.php?idProd=' . $produit->getId() .'">Voir</a>';
										echo '<input type="hidden" name="qte" value="1" />';
										echo '<input type="hidden" name="idProd" value="' . $produit->getId() . '" />';
										if(isset($_SESSION['userId']) && $produit->getStock() > 0){
											echo '<input type="submit" class="btn btn-primary addPanier" value="Acheter" />';
										} else {
											echo '<input type="submit" class="btn btn-default addPanier" disabled value="Indisponible" />';
										}
									echo '</form>';
								echo '</li>';
								
								if($i%4 == 3 OR $i == $nbCoupCoeur - 1)
								{
										echo '</ul>';
									echo '</div>';
								}
							}
						?>
					</div>
					<a data-slide="prev" href="#myCarousel" class="left carousel-control">‹</a>
					<a data-slide="next" href="#myCarousel" class="right carousel-control">›</a>
				</div>
			</div>
		</div>
	<?php } ?>
	<?php
		if ($nbAllProduct <= 0)
		{
			echo "<p>" . $message . "</p>";
		} else {
			foreach($tabAllProduct as $produit)
			{
				echo  '<div class="col-md-4 col-xs-12" >';
					echo '<div class="thumbnail col-md-12" >';
						echo '<div class="img-container">';
							echo  "<img class='img-produit-preview' alt='image de produit' src='" . Config::IMG_REPERTORY_NAME . $produit->getPathFile() . "' />";
						echo '</div>';
						echo '<div class="caption">';
							echo '<h3>' . $produit->getNom() . '</h3>';
							echo '<form class="formAddPanier" action="controller/controllerAddPanier.php" method="post">';
								echo '<a class="btn btn-default link-without-style" data-url="controller/controllerSeeOneArticle.php?idProd=' . $produit->getId() .'" role="button">Voir</a>';
								echo '<input type="hidden" name="idProd" value="' . $produit->getId() . '" />';
								echo '<input type="hidden" name="qte" value="1" />';
								echo ' <input type="submit" class="btn btn-primary link-without-style addPanier" value="Acheter" />';
							echo '</form>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			}
		}
		 
	?>
</div>



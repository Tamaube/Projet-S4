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
									echo '<p>' . $produit->getNom()  . '<br>';
									echo '<small class="red">' . $produit->getPrix() . ' €</small><br>';
									echo '<a href="#" class="btn btn-default">Voir</a>';
									echo '<a href="#" class="btn btn-primary addPanier">Acheter</a></p>';
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
		foreach($tabAllProduct as $produit)
		{
			echo  '<div class="col-md-4 col-xs-12" >';
				echo '<div class="thumbnail col-md-12" >';
					echo '<div class="img-container">';
						echo  "<img class='img-produit-preview' alt='image de produit' src='" . Config::IMG_REPERTORY_NAME . $produit->getPathFile() . "' />";
					echo '</div>';
					echo '<div class="caption">';
						echo '<h3>' . $produit->getNom() . '</h3>';
						echo '<p><a class="btn btn-default link-without-style" data-url="controller/controllerSeeOneProduct.php?idVideo=' . $produit->getId() . '" role="button">Voir produit</a>';
						echo ' <a href="#" class="btn btn-primary link-without-style addPanier" id="' . $produit->getId() . '" role="button">Ajouter au panier</a></p>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
		 
	?>
</div>



<div class="col-xs-12 col-md-8">
	<div class="col-xs-12 col-md-4">
		<div class="img-container">
			<img class='img-produit-preview' alt='image de produit' src=' <?php echo  Config::IMG_REPERTORY_NAME . $produit->getPathFile() ; ?>' />
		</div>
	</div>
	<div class="col-xs-12 col-md-8">
		<div class="col-xs-12">
			<h2><?php echo $produit->getNom(); ?></h2>
			<hr></hr>
			<p><?php echo $produit->getDescription(); ?></p>
			<hr></hr>
			<p><?php echo $produit->getPrix(); ?> €</p>
			
			<?php
				if($produit->isCoupDeCoeur()) {
					echo "<span class='glyphicon glyphicon-heart coupCoeur' title='Coup de coeur de l\'équipe'></span>";
				} else {
					echo "<span class='glyphicon glyphicon-heart'></span>";
				}
			?>
			<?php if($produit->getStock() <=0) { ?>
				<div><input type="button" class="btn btn-default" value="Produit indisponible" disabled /></div>
			<?php } else { 
					if(!$utilisateurCo){ ?>
						<div><input type="button" class="btn btn-default" value="Produit indisponible" title="Vous devez être connecté" disabled /></div>
			<?php   } else { ?>
						<form class="formAddPanier" action="controller/controllerAddPanier.php" method="post" >
							<div><label for="qte">Quantité: </label><input type="number" style="height:auto;"  id="qte" name="qte" value="1" min="1" max="<?php echo $produit->getStock();?>" /> </div>
							<div><input type="hidden" name="viaPageArticle" value="true" /></div>
							<div><input type="hidden" name="idProd" value="<?php echo $produit->getId(); ?>" /></div>
							<div><input type="submit" class="btn btn-primary" value="Ajouter au panier" /></div>
						</form>
			<?php   }
				} ?>
		</div>
	</div>
</div>
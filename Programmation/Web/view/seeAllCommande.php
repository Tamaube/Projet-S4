<div class="col-xs-12">
	<form class="form">
		<legend>Votre panier</legend>
		<fieldset>
		<?php
			$total = 0;
			if($nbCmd == 0)
			{
				echo '<p>Votre panier est vide</p>';
			}
			foreach($tabCommandes as $cmd)
			{

				$prod = getOneProduct($cmd->getProduit());
				$prix = $prod->getPrix() * $cmd->getQuantite();
				$total += $prix;
				echo '<div class="col-xs-12">';
					echo '<h4 class="col-xs-12 col-sm-4"><a class="link-without-style" data-url="controller/controllerSeeOneArticle.php?idProd=' . $prod->getId() .'">' . $prod->getNom() . '</a></h4>';
					echo '<p class="col-xs-12 col-sm-3"><label for ="qte"  class="LqteSeeAllCmd">Quantité : </label>';
					echo '<input type="number" name="qte"  style="height:auto;" id="qte" class="qteSeeAllCmd" min="1" max="' . $prod->getStock() . '" value="' . $cmd->getQuantite() . '" /></p>';
					echo '<p class="col-xs-12 col-sm-3">Prix : ' . $prix . '</p>';
					echo '<p class="col-xs-12 col-sm-2"><span class="glyphicon glyphicon-trash"></span></p>';
				echo '</div>';
								
			}
		?>
		</fieldset>
		<hr></hr>
		<fieldset>
			<h3>Total : <?php echo $total;?></h3>
		</fieldset>
		
		<fieldset>
			<input type="button" class="btn btn-primary" value="Valider panier" />
		</fieldset>
			
	</form>
</div>
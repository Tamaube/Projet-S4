<div class="col-xs-12">
	<form id="formPanier" method="post">
		<legend>Votre panier</legend>
		<fieldset>
		<?php
			$total = 0;
			if($nbCmd == 0)
			{
				echo '<p>Votre panier est vide</p>';
			}
			else {
				//On affiche les commandes
				foreach($tabCommandes as $cmd)
				{

					$prod = getOneProduct($cmd->getProduit());
					$prix = $prod->getPrix() * $cmd->getQuantite();
					$total += $prix;
					echo '<div class="col-xs-12">';
						echo '<h4 class="col-xs-12 col-sm-4"><a class="link-without-style" data-url="controller/controllerSeeOneArticle.php?idProd=' . $prod->getId() .'">' . $prod->getNom() . '</a></h4>';
						echo '<p class="col-xs-12 col-sm-3"><label for ="qte"  class="LqteSeeAllCmd">Quantité : </label>';
						echo '<input type="number" name="qte"  style="height:auto;" id="qte" class="qteSeeAllCmd" min="1" max="' . $prod->getStock() . '" value="' . $cmd->getQuantite() . '" /></p>';
						echo '<input type="hidden" name="idProd" value="' . $cmd->getId() . '" />';
						echo '<p class="col-xs-12 col-sm-3">Prix : ' . $prix . '</p>';
						echo '<p class="col-xs-12 col-sm-2"><span class="glyphicon glyphicon-trash suppPanier" data-url="controller/controllerSupprimerCommande.php" data-method="post" data-id="' . $cmd->getId() . '"></span></p>';
					echo '</div>';
									
				}
			}
		?>
		</fieldset>
		<hr></hr>
		<fieldset>
			<h3>Total : <?php echo $total;?> €</h3>
		</fieldset>
		
		<fieldset id="fieldVerifPAnier">
			<input type="button" class="btn btn-primary" id="verifPanier" data-url="controller/controllerVerifPanier.php" value="Valider panier" />
		</fieldset>
		
		<fieldset style="display: none;" class="fieldPastCmd">
			<div><label for="r">Adresse: </label><textarea cols='10' rows='3' name='rue' id="rue" ></textarea></div>
			<div><label for="ville">Ville: </label><input type="text" id="ville" name="ville" /></div>
			<div><label for="code_postal">Code Postal: </label><input type="text" id="code_postal" name="code_postal" /></div>
			<div><label for="pays">Pays: </label><input type="text" id="pays" name="pays" /></div>
		</fieldset>
		
		<fieldset style="display: none;" class="fieldPastCmd">
			<input type="button" class="btn btn-primary" value="Passer commande" />
		</fieldset>
	</form>
</div>
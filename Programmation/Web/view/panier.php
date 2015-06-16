<!--<div class="col-xs-12 col-md-4">-->
	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">Votre panier <a class="link-without-style" data-url="controller/controllerModifierProfil.php"><?php echo $clt->getPseudo(); ?></a></h3>
	  </div>
	  <div class="panel-body">
		<?php
			if($nbCmd == 0)
			{
				echo '<p>Votre panier est vide</p>';
			}
			foreach($tabCommandes as $cmd)
			{
				$prod = getOneProduct($cmd->getProduit());
				$prix = $prod->getPrix() * $cmd->getQuantite();
				echo '<div class="col-xs-12">';
					echo '<h4><a class="link-without-style" data-url="controller/controllerSeeOneArticle.php?idProd=' . $prod->getId() .'">' . $prod->getNom() . '</a></h4>';
					echo '<p class="col-xs-12 col-md-6">Quantité : ' . $cmd->getQuantite() . '</p>';
					echo '<p class="col-xs-12 col-md-6">Prix : ' . $prix . '</p>';
				echo '</div>';
				if($cmd != $tabCommandes[$nbCmd - 1]){
					echo '<hr></hr>';
				}
			}
		?>
	  </div>
	  <div class="panel-footer">
			<form action="controller/controllerDisconnect.php" class="form" method="post" data-reload="index.php">
				<div class="col-xs-6"><input id="disconnection" type="submit" value="Déconnexion" class="btn btn-primary" /></div>
				<div class="col-xs-6"><input type="button" value="Voir Panier" class="btn btn-default link-without-style" data-url="controller/controllerSeeAllCommande.php" /></div>
			</form>
	  </div>
	</div>
<!--</div>-->
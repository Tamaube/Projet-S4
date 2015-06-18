<header>
	<div class="main-header">
		<div class="row">
			<div class="col-md-12">
			<div class="col-md-12">
					
						<!--<img alt="logo" src="img/logo.png" class="img-responsive" />-->
						<h1 id="title"><img  alt="logo" src="img/logo.png" id="logo" />
										<span>ROCK'N'CLOTHES</span></h1>
					
				
			</div>
			</div>
		</div>
	</div>
	<nav>
		<div class="container-fluid">
			<ul class="nav navbar-nav liens">
				<li> <a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp; Accueil</a> </li>
			<?php
				foreach($listeCat as $cat)
				{
					if ($cat->haveSousCat())
					{
						echo '<li class="dropdown">';
							echo '<a class="dropdown-toggle link-without-style" data-hover="dropdown" data-url="controller/controllerListeProduct.php?idCat=' . 
									$cat->getId() .
									'">'. $cat->getNom() .
									'<b class="caret"></b></a>';
							echo '<ul class="dropdown-menu">';
							foreach($cat->getSesSousCategories() as $sousCat)
							{
								echo '<li><a class="link-without-style" data-url="controller/controllerListeProduct.php?idCat=' . 
									$cat->getId() . '&idSousCat=' . $sousCat->getId() .
									'">'. $sousCat->getNom() . '</a></li>';
							}
							echo '</ul>';
						echo '</li>';
					} else {
						echo '<li> <a class="link-without-style" data-url="controller/controllerListeProduct.php?idCat=' . $cat->getId() . '">' . $cat->getNom() . '</a> </li>';
					}
				
				
				}
			?>
			</ul>
	
			<form class="navbar-form navbar-right inline-form" id="formRecherche" action="controller/controllerListeProduct.php" 
					method="post" data-completion="controller/controllerAutoCompletion.php">
				<div class="form-group col-xs-12">
				  <input type="search" class="input-sm form-control" name="recherche" id="recherche" list="listRecherche" placeholder="Recherche">
				  <datalist id="listRecherche">
				  </datalist>
				  <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span></button>
				</div>
			 </form>
		</div>
	</nav>
</header>
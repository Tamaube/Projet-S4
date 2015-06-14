<header>
	<div class="main-header">
		<div class="row">
			<div class="col-md-12">
				<div id="logo">
					<a href="index.php">
						<img alt="logo" src="img/logo.png" class="img-responsive" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar">
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
	
			<form class="navbar-form navbar-right inline-form">
				<div class="form-group">
				  <input type="search" class="input-sm form-control" placeholder="Recherche">
				  <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span></button>
				</div>
			 </form>
		</div>
	</nav>
</header>
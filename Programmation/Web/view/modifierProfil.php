<div class="col-xs-12">	
	<h2>Modifier votre profil</h4>
	<form action="controller/controllerTraitementModifProfil.php" method="post" data-reload="index.php"  class="form">
		<fieldset>
			<legend>
				Vos Identifiants:
			</legend>
			<div>
				<label class="col-md-6 col-xs-12" for ="pseudo">Pseudo: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="pseudo" name="pseudo" value="<?php echo $clt->getPseudo(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="actuPassword">Mot de passe actuel: </label>
				<input class="col-md-6 col-xs-12" type="password" id ="actuPassword" name="actuPassword" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="password">Nouveau mot de passe: </label>
				<input class="col-md-6 col-xs-12" type="password" id ="password" name="password" />
			</div>
			
			<div>
				<label class="col-md-6 col-xs-12" for ="confPassword">Confirmer mot de passe: </label>
				<input class="col-md-6 col-xs-12" type="password" id ="confPassword" name="confPassword" />
			</div>					
		</fieldset>
		
		<fieldset>
			<legend>
				Vos informations personnelles:
			</legend>
			<div>
				<label class="col-md-6 col-xs-12" for ="nom">Nom: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="nom" name="nom"  value="<?php echo $clt->getNom(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="prenom">Prénom: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="prenom" name="prenom"  value="<?php echo $clt->getPrenom(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="age">Age: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="age" name="age"  value="<?php echo $clt->getAge(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="mail">E-mail: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="mail" name="mail"  value="<?php echo $clt->getMail(); ?>" />
			</div>
			
		</fieldset>
		
		<fieldset>
			<legend>
				Vos Coordonnées:
			</legend>
			<div>
				<label class="col-md-6 col-xs-12" for ="rue">Rue: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="rue" name="rue"  value="<?php echo $clt->getRue(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="ville">Ville: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="ville" name="ville"  value="<?php echo $clt->getVille(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="code_postal">Code postal: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="code_postal" name="code_postal"  value="<?php echo $clt->getCode_postal(); ?>" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="pays">Pays: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="pays" name="pays"  value="<?php echo $clt->getPays(); ?>" />
			</div>
		</fieldset>
		<hr></hr>	
		<fieldset style ="text-align:right;">
			
		   <button type="reset" class="btn btn-default">Effacer</button>
		   <button type="submit" class="btn btn-primary">Valider</button>
		</fieldset>
	</form>
</div>
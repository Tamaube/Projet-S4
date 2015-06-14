<div class="col-xs-12">	
	<h2>Inscription</h4>
	<form action="controller/controllerInscription.php" method="post" data-reload="index.php">
		<fieldset>
			<legend>
				Vos Identifiants:
			</legend>
			<div>
				<label class="col-md-6 col-xs-12" for ="pseudo">Pseudo: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="pseudo" name="pseudo" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="password">Mot de passe: </label>
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
				<input class="col-md-6 col-xs-12" type="text" id ="nom" name="nom" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="prenom">Prénom: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="prenom" name="prenom" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="age">Age: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="age" name="age" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="mail">E-mail: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="mail" name="mail" />
			</div>
			
		</fieldset>
		
		<fieldset>
			<legend>
				Vos Coordonnées:
			</legend>
			<div>
				<label class="col-md-6 col-xs-12" for ="rue">Rue: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="rue" name="rue" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="ville">Ville: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="ville" name="ville" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="code_postal">Code postal: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="code_postal" name="code_postal" />
			</div>
			<div>
				<label class="col-md-6 col-xs-12" for ="pays">Pays: </label>
				<input class="col-md-6 col-xs-12" type="text" id ="pays" name="pays" />
			</div>
		</fieldset>
		<hr></hr>	
		<fieldset style ="text-align:right;">
			
		   <button type="reset" class="btn btn-default">Effacer</button>
		   <button type="submit" class="btn btn-primary">Valider</button>
		</fieldset>
	</form>
</div>
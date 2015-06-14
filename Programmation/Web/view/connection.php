<div class="col-xs-12 col-md-4">
	<div class="panel panel-default">
	
			<div class="panel-body">
				<form action="controller/controllerConnection.php" method="post" id="formConnection" data-reload="index.php">
					<fieldset>
						<div class="col-xs-12">
							<label for="pseudo">Pseudo:</label>
							<input type="text" name="pseudo" id="pseudo" class="col-xs-12 col-md-8" />
						</div>
						<div class="col-xs-12">
							<label for="mdp">Mot de passe:</label>
							<input type="password" name="mdp" id="mdp"  class="col-xs-12 col-md-8" />
						</div>
					</fieldset>
					<fieldset>
						<div class="col-xs-6">
							<input type="button" data-url="view/inscription_popup.php" value="Inscription" class="btn btn-default link-without-style" />
						</div>
						<div class="col-xs-6" style="text-align: right;">
							<input id="connection" type="submit" value="Connexion" class="btn btn-primary" />
						</div>
					</fieldset>
				</form>
			</div>	  
	</div>
</div>

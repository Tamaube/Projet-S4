<div class="col-xs-12">
	<form class="form" data-reload="view/seeFinPaiement.php" action="controller/controllerTraitementSimuPaiement.php" method="post">
		<fieldset class="col-xs-12">
			<div><label for="codeCarte">Numéro de carte: </label><input type="text" name="codeCarte" id="codeCarte" /></div> 
			<div><label for="crypto">Cryptogramme: </label><input type="text" name="crypto" id="crypto" /></div> 
			<div>
				<label>Date d'expiration: </label>
				<select name="mois">
					<?php
						for($i = 1; $i <= 12; $i++)
						{
							echo "<option value='" . $i . "'>";
								if($i < 10)
								{
									echo '0' . $i;
								} else {
									echo $i;
								}
							echo '</option>';
						}
					?>
				</select>
				
				<select name="annee">
					<?php
						for($i = 14; $i <= 25; $i++)
						{
							echo "<option value='" . $i . "'>";
								echo $i;
							echo '</option>';
						}
					?>
				</select>
			</div> 
		</fieldset>
		<fieldset class="col-xs-12">
			<input type="submit" class="btn btn-primary" value="Valider" />
		</fieldset>
	</form>
</div>
<script>
</script>
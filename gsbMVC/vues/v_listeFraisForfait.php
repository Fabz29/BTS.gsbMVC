<div id="contenu">
	 <div class="panel panel-heading">
 		 <h3 class="panel-title">Renseigner ma fiche de frais du mois <?php echo $numMois."-".$numAnnee ?></h3> 
    </div>
     
         
      <form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
        <div class="panel panel-info">
          <div class="panel-heading">
			<strong>Eléments forfaitisés</strong>
		</div>
		<div class="panel-body">
			<?php
				foreach ($lesFraisForfait as $unFrais)
				{
					$idFrais = $unFrais['idfrais'];
					$libelle = $unFrais['libelle'];
					$quantite = $unFrais['quantite'];
			?>
					<p>
						<div class="input-group">
						  <span class="input-group-addon"><?php echo $libelle ?>"        "       </span>
						  <input type="text" class="form-control"  id="idFrais" name="lesFrais[<?php echo $idFrais?>]" value="<?php echo $quantite?>">
						</div>
					</p>
			
			<?php
				}
			?>

      <div class="piedForm">
      <p>
        <input class="btn btn-default" id="ok" type="submit" value="Valider" size="20" />
        <input class="btn btn-default" id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
      			</div>	
		</div>
        
      </form>
  
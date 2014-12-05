 <div id="contenu">
 	<div class="panel panel-heading">
 		<h3 class="panel-title">Mes fiches de frais</h3> 
    </div>
    <div class="panel panel-default">
  		<div class="panel-body">
      <h4>Mois à sélectionner : </h4>
      <form action="index.php?uc=etatFrais&action=voirEtatFrais" method="post">       
        <select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if($mois == $moisASelectionner){
				?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
                 

        </select>
      </div>
      <p>
      <div class="piedForm">
        <input class="btn btn-default" id="ok" type="submit" value="Valider" size="20" />
        <input class="btn btn-default" id="annuler" type="reset" value="Effacer" size="20" />
      </div>
      </p>
      </div>

        

       </form>
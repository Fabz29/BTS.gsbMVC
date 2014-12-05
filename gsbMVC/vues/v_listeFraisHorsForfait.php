
<table class="listeLegere">
  <div class="panel panel-default">
    <div class="panel-body">
           <strong>Descriptif des éléments hors forfait</strong>
    </div>
  </div>

             <tr>
                <th class="date">Date</th>
				<th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>  
                <th class="action">&nbsp;</th>              
             </tr>
          
    <?php    
	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['date'];
			$montant=$unFraisHorsForfait['montant'];
			$id = $unFraisHorsForfait['id'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');"><img src="images/btsup.jpg" alt="Supprimer" title="Supprimer" style="width:20px; height:20px;"></a></td>
             </tr>
	<?php		 
          
          }
	?>	  
                                          
    </table>
      <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post">
            <div class="panel panel-info">
              <div class="panel-heading">
                <strong>Nouvel élément hors forfait</strong>
              </div>
              <div class="panel-body">
                  <p>
                    <div class="input-group">
                    <span class="input-group-addon">Date (jj/mm/aaaa): </span>
                    <input type="text" class="form-control" id="txtDateHF" name="dateFrais" size="10" maxlength="10" value=""  />
                  </div>
                  </p>
                  <p>
                    <div class="input-group">
                    <span class="input-group-addon">Libellé</span>
                    <input type="text" class="form-control" id="txtLibelleHF" name="libelle" size="70" maxlength="256" value="" />
                    </div>
                  </p>
                  <p>
                    <div class="input-group">
                    <span class="input-group-addon">Montant : </span>
                    <input type="text" class="form-control" id="txtMontantHF" name="montant" size="10" maxlength="10" value="" />
                    </div>
                  </p>

      <div class="piedForm">
      <p>
        <input class="btn btn-default" id="ajouter" type="submit" value="Ajouter" size="20" />
        <input class="btn btn-default" id="effacer" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
                        </div>
              </div>
      </form>
  </div>

  


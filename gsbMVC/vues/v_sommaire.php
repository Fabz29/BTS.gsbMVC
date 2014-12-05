    <!-- Division pour le sommaire -->
    
    <div id="menuGauche">
     <div id="infosUtil">
    
    <h2>
    Visiteur :
              <span class="label label-default" style="font-style: italic;"><?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?></span>
    </h2>
    </div>

      
<ul class="nav nav-tabs nav-justified" >
  <li role="presentation"><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a></li>
  <li role="presentation"><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></li>
  <li role="presentation"><a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a></li>
</ul>

        
</div>
    
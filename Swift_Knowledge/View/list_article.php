

<?php
//connexion à la BDD
			require "../Model/ConnexionBdd.php" ;
			
			
  
		
      $req= ConnexionBdd::getInstance()->prepare("select ficheconnaissance.titre, categorie.titre, date from ficheconnaissance join categorie where ficheconnaissance.idcat = categorie.idcat ");
      $req->execute();
      $donnees=$req->fetchAll();


      var_dump( $donnees);


      foreach($donnees as $donne){
        echo "<div class='card text-center'>
          <div class='card-header'>
            <h2>$donne[0]</h2>
          </div>
          <div class='card-body'>
            <h5 class='card-title'><p>$donne[1] </p</h5>
                <a href='#' class='btn btn-primary'>Plus d'info</a>
          </div>
          <div class='card-footer text-muted'>
            <h2>$donne[2]<h2>
          </div>
        </div>";

         
      }
    
      
?>
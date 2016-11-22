<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8">
	  <link rel="stylesheet"  href="style.css" />
	  
    </head>
    
	<body>	
	   <form class="monform1" method="POST" action="site.php">
	   <fieldset>
		   <legend>Ajouter un client</legend>
		   <p>
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom">
			</p>
			<p>
				<label for="prenom">Prenom :</label>
				<input type="text" id="prenom" name="prenom">
			</p> 
			<p>
				<label for="date_naiss">Date de naissance :</label>
				<input type="date" id="date_naiss" name="date_naiss">
			</p>
			<p>
				<label for="tel">Tél :</label>
				<input type="text" id="tel" name="tel">
			</p>
			<p>
				<input type="submit" value="Ajouter Client" name="addClient">
				<input type="reset" value="Tout effacer" name="toutEffacer">
			</p>
	   </fieldset>
	   </form>
	    <form class="monform3" method="POST" action="site.php">
		   <fieldset>
				<legend>Recherche d'un client</legend>
				<p>
					<label for="nom">Nom</label>
					<input type="text" id="nom" name="nom">
				</p>
				<p>
					<input type="submit" value="Recherche"  name="search">
					<input type="reset" value="Tout effacer" name="reset">
				</p>
		   </fieldset>
	   </form>
	   
	   <form class="monform2" method="POST" action="site.php">
		   <fieldset>
				<legend>Afficher tous les clients</legend>
				<p><input type="submit" value="Afficher les clients"  name="displayClient"></p>
		   </fieldset>
		   <?php
				echo'<form><fieldset><legend>Les clients de la base</legend>';				
				echo $contenuAffichage;
				echo'</fieldset></form>';
		   ?>
	   </form>
	</body>
</html>
	   
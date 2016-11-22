<?php
	require_once('connect.php');
	function getConnect(){
		$connexion = new PDO('mysql:host='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
		$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$connexion->query('SET NAMES UTF8');
		return $connexion;
	}
	function chercherTousLesClients(){
		$connexion=getConnect();
		$requete="SELECT * FROM clientsimple";
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$client=$resultat->fetchall();
		$resultat->closeCursor();
		return $client;
	}
	
	function chercherNomclient($nom){
		$connexion=getConnect();
		$requete="SELECT * FROM clientsimple WHERE nom='$nom'";
		$resultat=$connexion->query($requete);
		$resultat->setFetchMode(PDO::FETCH_OBJ);
		$client=$resultat->fetchall();
		$resultat->closeCursor();
		return $client;
	}
	
	function ajouterClient($nom,$prenom,$date_naiss,$tel){
		$connexion=getConnect();
		$requete="INSERT INTO clientsimple VALUES ('','$nom,$prenom,$date_naiss,$tel')";
		$resultat = $connexion->query($requete);
		$resultat->closeCursor();
	}
	
	function supprimerClient($id){
		$connexion=getConnect();
		$requete ="DELETE FROM clientsimple WHERE id='$id'";
		$resultat=$connexion->query($requete);
		$resultat->closeCursor();
		
	}



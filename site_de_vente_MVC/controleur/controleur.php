<?php
	require_once('modele/modele.php');
	require_once('vue/vue.php');

	function CtlAccueil(){
		afficherAccueil();
	}
	
	function CtlAfficherClient(){
		if($client = null){
			throw new Exception('Aucune ligne ne répond à votre requête !');
		}
		else{
		$client = chercherTouslesClients();
		afficherClient($client);
		}
	}
	
	function CtlAjouterClient($nom,$prenom,$date_naiss,$tel){
		if(!(empty($nom) || empty($prenom) || empty($date_naiss) || empty ($tel))){
			ajouterClient($nom,$prenom,$date_naiss,$tel);
			afficherAccueil();
		}
		else{
			throw new Exception (' Un des champs est vide !');
		}
	}
	
	function CtlChercherClient($nom){
		if (!(empty($nom))){
			$client = chercherNomClient($nom);
			if ($client == null){
				throw new Exception ('Le champs nom est invalide !');
			}
			else{
				afficherClient($client);
			}
			
		}
	}
	
	function CtlSupprimerClient(){
		if(!(isset($_POST))){
			throw new Exception ('Vous n\'avez pas sélectionné un client à censurer !');
		}
		else{
			foreach($_POST as $key => $val){
				supprimerClient($key);
			}				
		afficherAccueil();
		}
	}
	
	
	function CtlErreur($erreur){
		afficherErreur($erreur);
	}
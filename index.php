<?php

/** 
 * Page de connexion de l'application

 * @author Bertrand REMY
 * @package default
 */
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;
session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");break; 
	}
//Rajout des deux cas comptables : validation des frais et suivi des paiements
	case 'suivrePaiements' :{
		include("controleurs/c_suivrePaiements.php");break;
	}
	case 'validerFrais' :{
		include("controleurs/c_validerFrais.php");break;
	}
}
include("vues/v_pied.php") ;
?>


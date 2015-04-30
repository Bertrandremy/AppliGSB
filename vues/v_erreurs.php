<?php 
/**
 *Affichage d'une erreur

 * @author Bertrand REMY
 * @package default
 */
?>
<div class ="erreur">
<ul>
<?php 
foreach($_REQUEST['erreurs'] as $erreur)
	{
      echo "<li>$erreur</li>";
	}
?>
</ul></div>

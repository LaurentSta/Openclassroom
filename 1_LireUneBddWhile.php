 
<?php
try
{
	// appel de dbname TEST

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    //----------------------------------
    //Exemple d appel sur serveur:
    //$bdd = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');
    //------------------------------------
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	// lecture et selection de notre table TESTOPENCLASS
$reponse = $bdd -> query('SELECT * FROM testopenclass');
	
	// traducton et analyse de la table en resultat
while ( $donnees = $reponse->fetch()) {
	echo '<p>'.$donnees[$_GET['nom']].' '.$donnees['texte'].'</p>';
}
// provoquer la « fermeture du curseur d'analyse des résultats »
$reponse->closeCursor();

?>


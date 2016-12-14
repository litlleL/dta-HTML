<?php
  
  // Sélection de la base de données:
  $db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
 
  // Récupération des valeurs des champs
  $numero_commande = $_POST["numero_commande"];
  $date_commande = $_POST["date_commande"];
  $livreur_id = $_POST["livreur_id"];
  $client_id = $_POST["client_id"];
 
  // Affichage des résultats
  if(!empty($_POST['numero_commande']) && !empty($_POST['date_commande']) && !empty($_POST['livreur_id']) && !empty($_POST['client_id']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO commande (id, numero_commande, date_commande, livreur_id, client_id)
            VALUES ( NULL, '$numero_commande', '$date_commande', '$livreur_id', '$client_id') " ;
 //execution
  	$array = $db->query($sql)->fetch();
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
<br />
<a href="javascript:window.history.back();">Retour</a>
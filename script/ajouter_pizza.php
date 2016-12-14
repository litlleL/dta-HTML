<?php
  // Sélection de la base de données:
  $db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
 
  // Récupération des valeurs des champs
  
  $libelle = $_POST["libelle"];
  $reference = $_POST["reference"];
  $prix = $_POST["prix"];
  $src = "./PhotosPizzas/";
  $url_image =  $_FILES['url_image']['name'];

  $url = "$src$url_image";
  
  // Affichage des résultats
  if(!empty($_POST['libelle']) && !empty($_POST['reference']) && !empty($_POST['prix']) && !empty($_FILES['url_image']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO pizzas (id, libelle, reference, prix, url_image)
            VALUES ( NULL, '$libelle', '$reference', '$prix', '$url') " ;
 
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
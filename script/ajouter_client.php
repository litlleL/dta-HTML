<?php

  // Sélection de la base de données:
  $db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
 
  // Récupération des valeurs des champs
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $ville = $_POST["ville"];
  $age = $_POST["age"];
 
  // Affichage des résultats
  if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['ville']) && !empty($_POST['age']))
  { 
  	// Création de la requête SQL:
  	$sql = "INSERT  INTO clients (id, nom, prenom, ville, age)
            VALUES ( NULL, '$nom', '$prenom', '$ville', '$age') " ;
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
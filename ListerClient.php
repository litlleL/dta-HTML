<?php
  	$db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
?>
<html>
    <header>
        <title>
            La Florentina
        </title>
    </header>

    <body>
        <header>
            <h1>Liste des clients</h1>
        </header>   
             <a href="AjouterClient.html">Ajout</a> / <a href="Accueil.html">Retour à l'accueil</a>

  	<?php
	    $sql = "SELECT nom FROM clients";
	    $stmt = $db->prepare($sql);
	    $stmt->execute();
	    $result = $stmt->fetchAll();
	      foreach($result as $row){
	?>
    		<?php echo $row["nom"]; ?>
	<?php
    	}
	?>
    </body>
</html>

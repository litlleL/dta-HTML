<?php
  	$db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>La Florentina</title>
    </head>
    <body>
		<div>
			<header>
				<h1>Gestion des commandes</h1>
				<h2>Création d'une commande</h2>
			</header> 
			<a href="index.html">Retour à l'accueil</a>
		</div>       
		<div>
			<form method="POST" action="./script/ajouter_commande.php" align="center">
				<input type="number" name="numero_commande" placeholder="numero_commande"><br/>
				<input type="date" name="date_commande" placeholder="jj/mm/aaaa"><br/>
				<input list="livreur" type="text" name="livreur_id" placeholder="Livreur"><br/>
				<datalist id="livreur">
				<?php
				    $sql = "SELECT * FROM livreurs";
				    $stmt = $db->prepare($sql);
				    $stmt->execute();
				    $result = $stmt->fetchAll();
				      foreach($result as $row){
				?>
						<option value="<?php echo $row["id"];?>"><?php echo $row["nom"]; echo " "; echo $row["prenom"]; ?></otpion>
				<?php
			    	}
				?>
					
				</datalist>
				<input list="client" type="text" name="client_id" placeholder="Client"><br/>
				<datalist id="client">
					<?php
						$sql = "SELECT * FROM clients";
						$stmt = $db->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
				      	foreach($result as $row){
					?>
						<option value="<?php echo $row["id"];?>"><?php echo $row["nom"]; echo " "; echo $row["prenom"]; ?></otpion>
					<?php
			    		}
					?>
				</datalist>
				<input type="submit">
			</form>
		</div>
		<footer>
			<p>Copyright La Florentina - Tous droits réservés<br /><br />
			<a href="#">Nous contacter</a></p>
		</footer>        
    </body>
</html>
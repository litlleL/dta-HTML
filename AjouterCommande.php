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
		</div>       
		<div>
			<form method="POST" action="./script/ajouter_commande.php" align="center">
				<input type="number" name="numéro" placeholder="numéro_commande"><br/>
				<input type="date" name="date" placeholder="jj/mm/aaaa"><br/>
				<input list="livreur" type="text" name="livreur" placeholder="Livreur"><br/>
				<datalist id="livreur">
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
					
				</datalist>
				<input list="client" type="text" name="client" placeholder="Client"><br/>
				<datalist id="client">
					<option value="gdghd">
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
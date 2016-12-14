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
            <h1>Liste des pizzas</h1>
        </header>   
             <a href="AjouterPizza.php">Ajout</a> / <a href="index.html">Retour à l'accueil</a>
			 <br/>
			 	<table width="100%">
    				<tr>
						<th align="left">Id.</th>
						<th align="left">Libelllé</th>
						<th align="left">Référence</th>
						<th align="left">Prix</th>
						<th align="left">Photo</th>
    				</tr>
    				<?php
						$sql = "SELECT * FROM pizzas";
						$stmt = $db->prepare($sql);
						$stmt->execute();
						$result = $stmt->fetchAll();
						foreach($result as $row){
					?>
						<tr>
							<td><?php echo $row["id"]; ?></td>
							<td><?php echo $row["libelle"]; ?></td>
							<td><?php echo $row["reference"]; ?></td>
							<td><?php echo $row["prix"]; ?></td>
							<td><img src="<?php echo $row["url_image"]; ?>"  style="width:200px"></td>
							<td><a href="ModifierClient.html">Modifier</a></td>
							<td><a href="SupprimerClient.html">Supprimer</a></td>
						</tr>
					<?php
						}
					?>
				</table>

					
    </body>
</html>

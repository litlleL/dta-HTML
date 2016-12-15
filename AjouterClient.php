<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="css/styleClients.css"/>
        <meta charset="utf-8" />
        <title>La Florentina</title>
    </head>
    <body>
		<div>
			<header>
				<h1>Gestion des clients</h1>
				<h2>Création d'un client</h2>
			</header> 
			<a id="retour" href="ListerClient.php">retour à la liste</a>
		</div>       
		<div id="div_form">
			<form  method="POST" action="./script/ajouter_client.php" align="center">
				<input type="text" name="nom" placeholder="Nom"><br/>
				<input type="text" name="prenom" placeholder="prenom"><br/>
				<input type="text" name="ville" placeholder="ville"><br/>
				<input type="text" name="age" placeholder="age"><br/>
				<input type="submit">
			</form>
		</div>       
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>La Florentina</title>
    </head>
    <body>
		<div>
			<header>
				<h1>Gestion des pizzas</h1>
				<h2>Création d'une pizza</h2>
			</header> 
			<a href="index.html">Retour à l'accueil</a>
		</div>       
		<div>
			<form enctype='multipart/form-data' method="POST" action="./script/ajouter_pizza.php" align="center">
				<input type="text" name="libelle" placeholder="libelle"><br/>
				<input type="text" name="reference" placeholder="reference"><br/>
				<input type="number" name="prix" placeholder="prix"><br/>
				<input type="file" name="url_image" accept="image/*" placeholder="age"/><br/>
				<input type="submit">
			</form>
		</div>
		<footer>
			<p>Copyright La Florentina - Tous droits réservés<br /><br />
			<a href="#">Nous contacter</a></p>
		</footer>        
    </body>
</html>
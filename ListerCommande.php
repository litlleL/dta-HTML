<?php
  	$db  =  new PDO('mysql:host=localhost;dbname=pizzeria3;charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html>
    <header>
        <title>
            La Florentina
        </title>
    </header>

    <body>
    <div>
        <header>
            <h1>Liste des commandes</h1>
        </header>   
             <a href="AjouterCommande.php">Ajout</a> / <a href="index.html">Retour à l'accueil</a>
             <table width="100%">
                <tr>
                    <th align="left">Id.</th>
                    <th align="left">Numéro</th>
                    <th align="left">Date</th>
                    <th align="left">Client</th>
                    <th align="left">Livreur</th>
                </tr>
                <?php
                    $sql = "SELECT commande.id, commande.numero_commande, commande.date_commande, clients.nom, clients.prenom, livreurs.nom, livreurs.prenom  
                    FROM commande 
                    INNER JOIN clients ON clients.id = commande.client_id 
                    INNER JOIN livreurs ON livreurs.id = commande.livreur_id";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll();
                    foreach($result as $row){
                ?>
                    <tr>
                        <td><?php echo $row["0"]; ?></td>
                        <td><?php echo $row["1"]; ?></td>
                        <td><?php echo $row["2"]; ?></td>
                        <td><?php echo $row["3"]; echo " "; echo $row["4"];  ?></td>
                        <td><?php echo $row["5"]; echo " "; echo $row["6"];  ?></td>
                        <td><a href="ModifierClient.html">Modifier</a></td>
                        <td><a href="SupprimerClient.html">Supprimer</a></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
    </div>
    </body>
</html>
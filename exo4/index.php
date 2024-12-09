<?php
require_once '../exo1/connectDB.php';

$sql = "SELECT * FROM clients INNER JOIN cards ON cards.cardNumber = clients.cardNumber INNER JOIN cardtypes ON cardtypes.id = cards.cardTypesId WHERE clients.card = 1 AND cards.cardTypesId = 1 AND cardtypes.id = 1;";



try {

    $stmt = $pdo->query($sql);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // ou fetch si vous savez que vous n'allez avoir qu'un seul résultat
} catch (PDOException $error) {
    echo "Erreur lors de la requete : " . $error->getMessage();
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ol>
        <h1>Les clients qui ont la carte de fidélité :</h1>

        <?php
        foreach ($users as $user) {
         
           
        ?>
            <li> Nom : <?= $user['firstName']  ?> | Prénom :  <?= $user['lastName']   ?>  | Carte de fidélité : <?= $user['card']   ?> </li>

        <?php
      
        }

        ?>

    </ol>

</body>

</html>




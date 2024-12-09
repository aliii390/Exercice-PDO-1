<?php
require_once '../exo1/connectDB.php';

$sql = "SELECT * FROM `shows` ";

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
        <h1>Liste des utilisateurs dont leur nom de famille commence par un M :</h1>

        <?php
        foreach ($users as $user) {
         
           
        ?>
            <li>Nom : <?= $user['title']  ?>  | l'artiste:  <?= $user['performer']  ?>   | la date  : <?= $user['date']  ?>   | l'heure : <?= $user['startTime']  ?>  </li>
           
            
            

        <?php
      
        }

        ?>

    </ol>

</body>

</html>

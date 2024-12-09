
<?php
require_once '../exo1/connectDB.php';

$sql = "SELECT * FROM clients WHERE clients.lastName LIKE 'M%'
ORDER BY clients.lastName ASC";

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
    <ul>
        <h1>Liste des utilisateurs dont leur nom de famille commence par un M :</h1>

        <?php
        foreach ($users as $user) {
         
           
        ?>
            <li>Nom : <?= $user['lastName']  ?>  </li>
            <li>Prénom : <?= $user['firstName']  ?>      </li>
            
            <?php echo "<br>"; ?>

        <?php
      
        }

        ?>

    </ul>

</body>

</html>

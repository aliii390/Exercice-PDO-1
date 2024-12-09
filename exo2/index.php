
<?php
require_once '../exo1/connectDB.php';

$sql = "SELECT * FROM `showtypes`";

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
        <h1>Tout les types de spectacle qui existe :</h1>

        <?php
        foreach ($users as $user) {
         
           
        ?>
            <li>type de spectacle: <?= $user['type']  ?>  </li>

        <?php
      
        }

        ?>

    </ol>

</body>

</html>

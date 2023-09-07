<?php

function find_all_students() :array {
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', '');
    $recipesStatement = $db->prepare('SELECT * FROM student');
    $recipesStatement->execute();
    $recipes = $recipesStatement->fetchAll();

    var_dump($recipes);

    return $recipes;
}

// Pièges: 
// retourner un tableau via la fetch
// Utiliser PDO
// Configurer correctement PhpMyAdmin

find_all_students();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }

        thead th,
        tbody td:nth-child(1) {
            background-color: #00BFFF;
        }
    </style>
    <title>Jour02 Job01</title>
</head>
<body>
<header>
    <H1>Jour02 -- job01</H1>
</header>

<main>
    <table>
        <thead>
        <!-- boucle pour afficher les entêtes de colonnes -->
        <?php foreach ($students[0] as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
        </thead>
        <tbody>
        <!-- boucle pour afficher les données -->
        <?php foreach ($students as $student): ?>
            <tr>
                <?php foreach ($student as $key => $value): ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>

</body>
</html>



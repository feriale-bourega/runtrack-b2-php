<?php

function find_one_student(string $email) :array {
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM student WHERE email = :email');
    $query->bindParam(':email',$email, PDO::PARAM_STR);
    
    $query->execute();
    $result = $query->fetchAll();
    
    return $result;
}

// Pièges: 
// utiliser bindParam   

$result = find_one_student('toto@gmail.com');
var_dump($result);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

        form {
            display: flex;
            flex-direction: column;
            width: 30%;
        }

        form input {
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            width: 100px;
            align-self: flex-end;
        }

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
    <title>Jour02  job02</title>
</head>
<body>
<header>
    <H1>Jour02 -- job02</H1>
</header>

<main>
    <section id="form">
        <form action="index.php" method="get">
            <label for="email">Email</label>
            <input type="email" name="input-email-student" id="email">
            <input type="submit" value="Rechercher">
        </form>
    </section>

    <section id="result">
        <?php
            if (isset($_GET['input-email-student'])) {
                $result = find_one_student($_GET['input-email-student']);
                if (count($result)>0) {
                    ?>
                    <table>
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Grade</th>
                            <th>email</th>
                            <th>fullname</th>
                            <th>birthdate</th>
                            <th>gender</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $result['id'] ?></td>
                                <td><?= $result['grade_id'] ?></td>
                                <td><?= $result['email'] ?></td>
                                <td><?= $result['fullname'] ?></td>
                                <td><?= $result['birthdate'] ?></td>
                                <td><?= $result['gender'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                }
            }
        ?>
    </section>


</main>

</body>
</html>
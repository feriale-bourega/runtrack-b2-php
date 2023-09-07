<?php
function log_in_db(){
    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $bdd;
}
function find_all_students_grades(): array {
    $bdd = new PDO('mysql:host=localhost;dbname=lp_official', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $bdd->prepare('SELECT * FROM student INNER JOIN grade ON student.grade_id = grade.id');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <main>
        <table border="1">
            <tr>
                <td>Grade ID</td>
                <td>E-Mail</td>
                <td>FullName</td>
                <td>Birthdate</td>
                <td>gender</td>
            </tr>
            <?php foreach (find_all_students_grades() as $student):?>
                <tr>
                    <td><?= $student['grade_id'] ?></td>
                    <td><?= $student['email'] ?></td>
                    <td><?= $student['fullname'] ?></td>
                    <td><?= $student['birthdate'] ?></td>
                    <td><?= $student['gender'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>
</html>
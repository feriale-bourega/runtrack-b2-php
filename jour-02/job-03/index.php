<?php
if(isset($_POST['input-email'])){
    $email = $_POST["input-email"];
    $fullname = $_POST["input-fullname"];
    $gender = $_POST["input-gender"];
    $inputBirthdate = $_POST["input-birthdate"];
    $grade_id = $_POST["input-grade_id"];
    $birthdate = new DateTime($inputBirthdate); // Convertit la chaîne en objet DateTime

    insert_one_student($email,$fullname,$gender,$birthdate,$grade_id);
}
function insert_one_student(string $email, string $fullname,string $gender, DateTime $birthdate, int $grade_id) :array {
    $db = new PDO('mysql:host=localhost;dbname=lp_official;charset=utf8', 'root', '');
    var_dump($email,$fullname,$gender,$birthdate,$grade_id);
    
    $birthdateFormatted = $birthdate->format('Y-m-d');
    $sql = 'INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (?,?,?,?,?)';
    var_dump($sql);
    $query = $db->prepare($sql);
    // $query->bindParam(':email',$email, PDO::PARAM_STR);
    
    $query->execute([$email,$fullname,$gender,$birthdateFormatted,$grade_id]);
    $result = $query->fetchAll();

    return $result;
}

?>
function showInputs(){
    echo '
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Formulaire</title>
    </head>
    <body>
        <form action="" method="POST">
            <label for="input-email">Adresse email :</label>
            <input type="email" name="input-email" id="input-email" required><br>
    
            <label for="input-fullname">Nom complet :</label>
            <input type="text" name="input-fullname" id="input-fullname" required><br>
    
            <label for="input-gender">Genre :</label>
            <select name="input-gender" id="input-gender">
                <option value="male">Homme</option>
                <option value="female">Femme</option>
            </select><br>
    
            <label for="input-birthdate">Date de naissance :</label>
            <input type="   " name="input-birthdate" id="input-birthdate" required><br>
    
            <label for="input-grade_id">Identifiant de grade :</label>
            <input type="number" name="input-grade_id" id="input-grade_id" required><br>
    
            <input type="submit" value="Soumettre">
        </form>
    </body>
    </html>
    ';

}
showInputs();

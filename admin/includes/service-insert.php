<?php

header('Content-Type: application/json');

/**
 * connexion à la base de données
 */
try {
    $connexion = new PDO('mysql:host=localhost;dbname=toyera;charset=utf8','root','17jOJyON3QHQ');
    $retour["status"] = "OK";
    $retour["message"] = "Connexion à la base de données réussie";
}
catch(Exception $ex) {
    $retour["status"] = "Not OK";
    $retour["message"] = "Erreur de connexion à la base de données";
}

if(isset($_POST['submit']))
{    
     $inputNom = $_POST['InputNom'];
     $inputDescription = $_POST['InputDescription'];
     $inputEtoiles = $_POST['InputEtoiles'];
     $inputPrix = $_POST['InputPrix'];
     $inputURLIMG = $_POST['InputURLIMG'];
     $inputURLSER = $_POST['InputURLSER'];
     
     $request = $connexion->prepare("SELECT * FROM services ORDER BY rand() LIMIT $a");
    $request->execute();

     $sql = "INSERT INTO `services`(`nom`, `description`, `etoiles`, `prix`, `img_url`, `url_service`)
     VALUES ('$inputNom','$inputDescription','$inputEtoiles','$inputPrix','$inputURLIMG','$inputURLSER')";

     if (mysqli_query($db, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
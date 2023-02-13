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

$a = 100;

$request = $connexion->prepare("SELECT * FROM services ORDER BY rand() LIMIT $a");
$request->execute();

$resultat = $request->fetchAll();

$retour["message"] = "Liste des services";
$retour["retour"] = $resultat;

$json = json_encode($retour);

if (file_put_contents("services.json", $json))
header('location:https://toreya.fr/admin/add-review?msg=success');

else 
    echo "Oops! Error creating json file...";

?>
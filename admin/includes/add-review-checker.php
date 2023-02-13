<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:../login');
} else {
    $host = "localhost";
    $dbname = "toyera";
    $user = "mateomoreau";
    $password = "ETY4J4NgmPB0";

    $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $user, $password);
    
        if ($pdo) {
            echo "Connected to the $dbname database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['InputNom']) AND !empty($_POST['InputDescription']) AND !empty($_POST['InputEtoiles']) AND !empty($_POST['InputImage'])){
          $nom = htmlspecialchars($_POST['InputNom']);
          $description = htmlspecialchars($_POST['InputDescription']);
          $etoiles = htmlspecialchars($_POST['InputEtoiles']);
          $img_url = htmlspecialchars($_POST['InputImage']);
      
          $req= $pdo->prepare('INSERT INTO `review`(image, nom, description, etoiles)VALUES(?, ?, ?, ?)');

          $req->execute(array($img_url, $nom, $description, $etoiles));
          header('Location: https://toreya.fr/includes/review.php');
          }} else {
            header('location:../add-review?msg=error');
        }
}
?>
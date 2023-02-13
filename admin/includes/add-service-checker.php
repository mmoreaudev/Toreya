<?php
ini_set('display_errors','on');
error_reporting(E_ALL);
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
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
        if ($pdo) {
            echo "Connected to the $dbname database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    if(isset($_POST['submit'])){
        if(!empty($_POST['InputNom']) AND !empty($_POST['InputDescription']) AND !empty($_POST['InputPrix']) AND !empty($_POST['InputURLIMG'])){
          $nom = htmlspecialchars($_POST['InputNom']);
          $description = htmlspecialchars($_POST['InputDescription']);
          $prix = htmlspecialchars($_POST['InputPrix']);
          $img_url = htmlspecialchars($_POST['InputURLIMG']);
      
          $req= $pdo->prepare('INSERT INTO services(nom, description, prix, img_url)VALUES(?, ?, ?, ?)');

          $req->execute(array($nom, $description, $prix, $img_url));
          header('location:https://toreya.fr/includes/services.php');
          }} else {
            header('location:../add-service?msg=error');
        }
}
?>
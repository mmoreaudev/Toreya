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
        header('location:../remove-service?msg=error');
    }
    $id=$_GET['id'];
    $pdo->query("DELETE FROM services WHERE id=$id");
    echo "id=$id";
    header('Location: https://toreya.fr/includes/services.php');
}
?>
<?php 
$ini = parse_ini_file('../../app.ini');

$Datahost = $ini['host'];
$Dataname = $ini['dbname'];
$Datauser = $ini['user'];
$Datapassword = $ini['password'];

$host = "$Datahost";
$dbname = "$Dataname";
$user = "$Datauser";
$password = "$Datapassword";

$dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";

try {

    $pdo = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
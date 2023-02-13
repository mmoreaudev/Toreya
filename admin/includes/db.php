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

$db=mysqli_connect("$host","$user","$password","$dbname");
// if($db){
//    echo "databse is connected !";
// }else{
//    echo "something is wrong with database !";
// }
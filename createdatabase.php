<?php
// DB connection info
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b0b8f67df48124";
$pwd = "2de77814";
$db = "SMSPHdb";
try{
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE registration_tbl(
                id INT NOT NULL AUTO_INCREMENT, 
                PRIMARY KEY(id),
                name VARCHAR(30),
                email VARCHAR(30),
                date DATE)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>
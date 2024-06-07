<?php 
require_once ("connexionDB.php");

$result = $cnx->query("SELECT service,ville FROM serv");


while ($data = $result->fetch()){

    echo $data["service"]."<br>";
    echo $data["ville"]."<br><br>";
}

$result->closeCursor();



?>



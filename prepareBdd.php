<?php
require_once ("connexionDB.php");

$req= $cnx->prepare("SELECT service,ville FROM serv WHERE ville=?");

$req->execute(array('LILLE'));

while($data=$req->fetch()){
    echo $data['service']."<br>";
  var_dump($data);
}

?>

<?php
echo '<link rel="stylesheet" href="./prepareBdd.css">';

$req2=$cnx->prepare("SELECT * FROM serv ");
$req2->execute(array());


echo "<table border='1'>" ;
echo "<tr>
<th>numero</th>
<th>service</th>
<th>ville</th>
</tr>";

while($data2=$req2->fetch()) {

    echo "<tr>";
    echo "<td>".$data2['noserv']."</td>";
    echo "<td>".$data2['service']."</td>";
    echo "<td>".$data2['ville']."</td>";
    echo "</tr>";
}

echo "</table>";


?>
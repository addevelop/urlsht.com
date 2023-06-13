<?php

include_once('../core/db.php');
$q = $_GET['q'];
$hint = "";

$sql = $dbh->prepare("SELECT * FROM client WHERE nom_cli LIKE '%" . $q . "%'");
$sql->execute();
while ($req = $sql->fetch()) {
    $hint = $hint . "<div class='item'> " . $req["nom_cli"] . "</div>";
}
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

echo $response;

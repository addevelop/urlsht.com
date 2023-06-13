<?php

try {
    $db = mysqli_connect("localhost", "root", "", "shorturl");
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

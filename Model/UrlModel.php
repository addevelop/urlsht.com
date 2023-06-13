<?php
session_start();

require_once("../core/db.php");

$fullUrl = mysqli_real_escape_string($db, $_SESSION['Url']['Url']);
$ran_url = substr(md5(microtime()), rand(0, 26), 5);
$sql = mysqli_query($db, "SELECT new_url from url WHERE new_url = '{$ran_url}'");
if (mysqli_num_rows($sql) == 0) {
    $date = date("d/m/Y");
    if (isset($_SESSION['Url']['IdClient'])) {
        $sql2 = mysqli_query($db, "INSERT INTO url (new_url, old_url, date_url, activate_url, ID_user) VALUES('{$ran_url}', '{$fullUrl}', '{$date}', 1, {$_SESSION['Url']['IdClient']})");
    } else {
        $sql2 = mysqli_query($db, "INSERT INTO url (new_url, old_url, date_url, activate_url) VALUES('{$ran_url}', '{$fullUrl}', '{$date}', 1 )");
    }
    $sql3 = mysqli_query($db, "INSERT INTO urlstat (click_stat, new_url) VALUES(0, '{$ran_url}')");
    if ($sql2) {
        $sql3 = mysqli_query($db, "SELECT new_url from url WHERE new_url = '{$ran_url}'");
        $shorten_url = mysqli_fetch_assoc($sql3);
        echo $shorten_url['new_url'];
    } else {
        echo "{$ran_url}, {$fullUrl}, {$date}";
    }
} else {
    echo "heu";
}

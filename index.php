<?php
include "core/db.php";
$newUrl = "";

if (isset($_GET)) {
    foreach ($_GET as $key => $val) {
        $u = mysqli_real_escape_string($db, $key);
        $newUrl = str_replace('/', '', $u);
    }
    $sql = mysqli_query($db, "SELECT old_url, new_url FROM url WHERE new_url = '{$newUrl}'");
    if (mysqli_num_rows($sql) > 0) {
        $fullUrl = mysqli_fetch_assoc($sql);
        $sqlre = mysqli_query($db, "SELECT * FROM urlstat WHERE new_url = '{$newUrl}'");
        $sqlrec = mysqli_fetch_assoc($sqlre);
        $click = intval($sqlrec['click_stat']) + 1;
        $sqlre = mysqli_query($db, "UPDATE urlStat set click_stat = '{$click}' WHERE new_url = '{$fullUrl['new_url']}'");

        header("Location:" . $fullUrl['old_url']);
    } else {
    }
} else {
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/load.css" />
    <link rel="icon" type="image/gif" href="document/load.gif" />
    <link rel="stylesheet" href="View/css/style.css" />
    <link rel="stylesheet" href="View/css/load.css" />
    <?php
    include_once('core/head.html');
    ?>
    <title>chargement</title>
</head>

<body>
    <?php
    require_once("./View/header.php");
    ?>
    <div class="container_load">
        <img src="document/loadlogo.gif" />
    </div>
    <?php

    if (isset($_GET) && !empty($_GET)) {

        foreach ($_GET as $key => $val) {
            $u = mysqli_real_escape_string($db, $key);
            $newUrl = str_replace('/', '', $u);
            $geturl = "./View/" . $newUrl . ".php";
        }
    } else {
        $geturl = "./View/index.php";
    }
    require($geturl);

    ?>
    <script src="View/js/app.js"></script>

    <script src="View/js/load.js"></script>

</body>


</html>
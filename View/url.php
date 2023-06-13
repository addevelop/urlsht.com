<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/url.css" />
    <link rel="stylesheet" href="./View/css/load.css" />
    <link rel="icon" type="image.png" size="16x16" href="./document/logo1.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </script>
    <title>Document</title>
</head>

<body>

    <?php
    $page = 0;
    $nbR = 10;
    $date = "";
    $date1 = "";
    $date2 = date("d/m/Y");

    if (isset($_POST['ligne']) && ctype_digit($_POST['ligne'])) {
        $nbR = $_POST['ligne'];
    }
    if (isset($_POST['page']) && ctype_digit($_POST['page'])) {
        $page = $_POST['page'];
    }
    if (isset($_POST['date1']) && $_POST['date1'] != "") {
        $date1 = date("d/m/Y", strtotime($_POST['date1']));
    }
    if (isset($_POSt['date2']) && $_POST['date2'] != "") {
        $date2 = date("d/m/Y", strtotime($_POST['date2']));
    }
    $sqlre = mysqli_query($db, "SELECT COUNT(*) as 'count' FROM url INNER JOIN urlstat on url.new_url = urlstat.new_url WHERE url.ID_user = '{$_SESSION['connected']['ID']}'");
    $sqlreq = mysqli_fetch_assoc($sqlre);
    $nombre = $sqlreq['count'];
    $pages = ceil($nombre / $nbR);
    $nbpg = $page * $nbR;

    $sqlre = mysqli_query($db, "SELECT * FROM url INNER JOIN urlstat on url.new_url = urlstat.new_url WHERE url.ID_user = '{$_SESSION['connected']['ID']}' AND url.date_url BETWEEN '{$date1}' AND '{$date2}' LIMIT {$nbpg}, {$nbR}");
    $qt = mysqli_num_rows($sqlre);

    ?>

    <div class="qt"><?php echo $qt + round($page * $nbR) . " / " . $nombre; ?></div>
    <form method="POST" class="option" id="form_ID" action="/urlsht.com/url">
        <select name="ligne">
            <?php if (isset($_POST['ligne'])) {
            ?>
            <?php
            }
            ?>
            <option value="10" <?php echo $nbR == "10" ? "selected" : ""; ?>>
                10
            </option>
            <option value="15" <?php echo $nbR == "15" ? "selected" : ""; ?>>
                15
            </option>
            <option value="50" <?php echo $nbR == "50" ? "selected" : ""; ?>>50</option>
            <option value="100" <?php echo $nbR == "100" ? "selected" : ""; ?>>100</option>
        </select>
        <input type="date" name="date1" value="<?php echo isset($_POST['date1']) && $_POST['date1'] != '' ? $_POST['date1'] : ''; ?>" />
        ET
        <input type="date" name="date2" />
        <input type="hidden" name="page" value="<?php echo $page; ?>" />
        <input type="submit" />



    </form>
    <table>
        <thead>
            <tr>
                <th>
                    URL
                </th>
                <th>
                    New URL
                </th>
                <th>
                    clique
                </th>
                <th>
                    date
                </th>
                <th>
                    option
                </th>

            <tr>
        </thead>
        <tbody>
            <?php
            $c = 0;
            while ($sqlrec = mysqli_fetch_assoc($sqlre)) {


            ?>
                <tr class="<?php echo $c % 2 == 0 ? "tr" : ""; ?>">
                    <td class="rowT"><?= $sqlrec['old_url']; ?></td>
                    <td class="rowT"><?php echo "http://localhost/NewProAjax/" . $sqlrec['new_url']; ?></td>
                    <td class="rowT"><?php echo $sqlrec['click_stat']; ?></td>
                    <td class="rowT"><?php echo $sqlrec['date_url']; ?></td>
                    <td class="rowT"><a class="button_access"><img src="./document/poub.png"></a><a class="button_access"><img src="./document/modi.png" /></a></td>
                </tr>

            <?php
                $c++;
            }
            ?>

        </tbody>
    </table>
    <div class=" block_page">
        <?php
        for ($i = 0; $i < $pages; $i++) {
        ?>
            <form class="pages " method="POST" action="/urlsht.com/url">
                <input type="hidden" name="ligne" value="<?php echo isset($_POST['ligne']) && $_POST['ligne'] != '' ? $_POST['ligne'] : ''; ?>" />
                <input type="hidden" name="date1" value="<?php echo isset($_POST['date1']) && $_POST['date1'] != '' ? $_POST['date1'] : ''; ?>" />
                <input type="hidden" name="date2" value="<?php echo isset($_POST['date2']) && $_POST['date2'] != '' ? $_POST['date2'] : ''; ?>" />



                <input class="<?php echo $page == $i ? 'active' : ''; ?>" name="page" type="submit" value="<?php echo $i; ?>" />
            </form>
        <?php
        }
        ?>
    </div>

</body>

</html>
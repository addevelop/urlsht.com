<?php

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/index.css" />


    <title>Document</title>
</head>

<body>

    <?php
    ?>



    <div class="formUrl">
        <form class="form_url" action="/urlsht.com/Controler/UrlClass.php" method="POST">
            <input type="text" class="input_url" placeholder="tap your URL" name="urlreel" />
            <button class="button_url">Short Url</button>
        </form>
    </div>
    <section class="pop_url">
        <section class="row container_url">
            <section class=" row col-xs-12 col-sm-12 col-md-12 col-lg-12 url url_ba">
                <div class="column_url title_1 col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    New url
                </div>
                <div class="row col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <input id="new_url" class="urlnew col-xs-12 col-sm-12 col-md-9 col-lg-9" type="text" value="url" disabled />
                    <div class="col-xs-12 col-sm-12 col-md-3 col-md-3">
                        <a class="button_access" id="copier_url"><img class="w-100" src="./document/acced.png" /></a>
                        <a class="button_access" id="new_url_acced" href="#"><img src="./document/link.png" /></a>
                    </div>
                </div>
            </section>

            <section class=" row col-xs-12 col-sm-12 col-md-12 col-lg-12 url">
                <div class="column_url title_1 col-xs-12 col-sm-12 col-md-5 col-lg-5">
                    URL
                </div>
                <div id="url" class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    url
                </div>
            </section>

        </section>
    </section>

    </div>
    <script src='/urlsht.com/View/js/urlShorter.js'></script>


</body>

</html>
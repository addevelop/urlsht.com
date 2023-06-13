<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/edit.css" />
    <link rel="stylesheet" href="css/formulary.css" />
    <link rel="stylesheet" href="css/load.css" />

    <title>Document</title>
</head>

<body>
    <?php
    require_once("header.php");
    ?>

    <div class="container_load">
        <img src="../document/loadlogo.gif" />
    </div>
    <?php

    if (isset($_GET['type']) && $_GET['type'] == "changePassword") {

    ?>

        <div>
            <form class="formPassword">
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="password" name="password" />
                            <img class="check_password" onclick="checkPassword($(this))" src="../document/fermer.png" />

                            <div class="label_text">Mot de passe</div>
                        </label>
                    </div>
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="password" name="password2" />
                            <img class="check_password" onclick="checkPassword($(this))" src="../document/fermer.png" />

                            <div class="label_text">Confimez votre mot de passe</div>

                        </label>
                    </div>
                </section>
            </form>
        </div>


    <?php
    }

    ?>
    <script src="js/animeInput.js"></script>
    <script src="js/checkPassword.js"></script>
    <script src=" js/load.js">
    </script>
</body>

</html>
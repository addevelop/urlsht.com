<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/formulary.css" />
    <link rel="stylesheet" href="./View/css/register.scss" />
    <title>Inscription</title>
</head>

<body>

    <?php
    require_once("header.php");
    ?>

    <div class="container_register row">

        <div class="container_formulaire col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
            <form class="formulary_regist" action="/urlsht.com/Controler/InscriptionClass.php" method="POST">
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-6 col-lg-6"><label class="container_input"><input class="input_text" type="text" name="lastname" />
                            <div class="label_text">Nom</div>
                        </label>
                    </div>
                    <div class="div_text col-xs-12 col-sm-12 col-md-6 col-lg-6"><label class="container_input"><input class="input_text" type="text" name="firstname" />
                            <div class="label_text">Prénom</div>
                        </label>
                    </div>
                </section>
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="text" name="email" />
                            <div class="label_text">Adresse email</div>
                        </label>
                    </div>
                </section>
                <section class="row">
                    <label class="container_radio col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="radio" class="input_radio" value="1" name="sex" />
                        <div class="button_input"></div>
                        <div class="text_input_radio">Homme</div>
                    </label>
                    <label class="container_radio col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="radio" class="input_radio" value="2" name="sex" />
                        <div class="button_input"></div>
                        <div>Femme</div>
                    </label>
                    <label class="container_radio col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="radio" class="input_radio" value="0" name="sex" />
                        <div class="button_input"></div>
                        <div>Autre</div>
                    </label>
                </section>
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="date" name="birthday" />
                            <div class="label_text label_text_focus">Votre date de naissance :</div>
                        </label>
                    </div>
                </section>
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-6 col-lg-6"><label class="container_input"><input class="input_text" type="password" name="password" />
                            <img class="check_password" onclick="checkPassword($(this))" src="/urlsht.com/document/fermer.png" />

                            <div class="label_text">Mot de passe</div>
                        </label>
                    </div>
                    <div class="div_text col-xs-12 col-sm-12 col-md-6 col-lg-6"><label class="container_input"><input class="input_text" type="password" name="password2" />
                            <img class="check_password" onclick="checkPassword($(this))" src="/urlsht.com/document/fermer.png" />

                            <div class="label_text">Confimez votre mot de passe</div>

                        </label>
                    </div>
                </section>
                <section class="row">
                    <div class="container_radio col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="checkbox" name="cgd" />
                        <div>Je confirme avoir lu les <a href=" #">conditions d'utilisation</a></div>
                    </div>

                </section>
                <section class="row">
                    <div class="container_submit col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input class="input_submit" type="submit" name="formregist" value="s'inscrire" />

                    </div>
                </section>

            </form>


        </div>
        <div class="container_img col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <img src="/urlsht.com/document/imgregistdeg.png" />
        </div>


    </div>
    <script src="/urlsht.com/View/js/animeInput.js"></script>
    <script src="/urlsht.com/View/js/checkPassword.js"></script>
</body>

</html>
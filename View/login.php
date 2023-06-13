<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/formulary.css" />
    <link rel="stylesheet" href="./View/css/login.css" />

    <title>Inscription</title>
</head>

<body>



    <div class="container_log row">
        <div class="container_formulaire col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
            <form class="formulary_regist" action="/urlsht.com/Controler/LoginClass.php" method="POST">
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="text" name="email" />
                            <div class="label_text">Adresse email</div>
                        </label>
                    </div>
                </section>
                <section class="row">
                    <div class="div_text col-xs-12 col-sm-12 col-md-12 col-lg-12"><label class="container_input"><input class="input_text" type="password" name="password" />
                            <img class="check_password" onclick="checkPassword($(this))" src="./document/fermer.png" />

                            <div class="label_text">Mot de passe</div>
                        </label>
                        <div><a class="password_forgot" href="#">mot de passe oublié ?</a></div>
                    </div>
                </section>
                <section class="row">
                    <div class="container_submit col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <input class="input_submit" type="submit" name="formlogin" value="Connexion" />

                    </div>
                </section>

            </form>
        </div>
        <script src="/urlsht.com/View/js/animeInput.js"></script>
        <script src="/urlsht.com/View/js/checkPassword.js"></script>
</body>

</html>
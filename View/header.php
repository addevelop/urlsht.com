<?php
session_start();
?>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/header.css" />

    <?php
    include_once('./core/head.html');
    ?>
    <title>Document</title>
</head>

<header class="row">
    <nav class="container_menu col-xs-12 col-sm-6 col-md-10 col-lg-10">
        <ul class="menu">
            <li>
                <a class="link" href="./index">Acceuil</a>
            </li>
            <li>
                <a class="link">Formulaire</a>
            </li>
            <li>
                <a class="link">Nous contacter</a>
            </li>
            <li>
                <a class="link">Compte</a>
                <ul class="sub_menu">
                    <?php
                    if (isset($_SESSION['connected'])) {
                        if ($_SESSION['connected']['status'] == 2) {
                    ?>
                            <li><a class="link_sub" href="login.php">Espace Admin</a></li>

                        <?php
                        }
                        ?>
                        <li class="subsub_menu"><a class=" link_sub" href="/urlsht.com/url">Mes URLS</a></li>
                        <li class="subsub_menu"><a class="link_sub" href="register.php">Gerer mon compte &#10132;</a>
                            <ul>
                                <li><a>Changer d'email</a></li>
                                <li><a>changer de mot de passe</a></li>
                                <li><a>Changer de numéro de téléphone</a></li>
                                <li><a class="colorD">supprimer le compte</li>
                            </ul>
                        </li>
                        <li><a class="link_sub colorD" href="/urlsht.com/core/desconnected">Déconnexion</a></li>
                    <?php

                    } else {
                    ?>
                        <li><a class="link_sub" href="/urlsht.com/login">Connexion</a></li>
                        <li><a class="link_sub" href="/urlsht.com/register">Inscription</a></li>
                    <?php
                    }
                    ?>

                </ul>
            </li>
            <li>
                <div id="changeb" class="block">
                    <div class="changeb">

                    </div>
                    <div class="changeb1"></div>
                </div>
            </li>
        </ul>
    </nav>
    <section class=" classSearch col-xs-12 col-sm-6 col-md-2 col-lg-2">
        <form class="classFormulaire">
            <input type="text" name="search" placeholder="Recherche" onkeyup="showResult(this.value)" />
            <div id="livesearch" class="recup"></div>
        </form>
    </section>
</header>



<script>
</script>
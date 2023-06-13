<?php

session_start();

require_once("../core/db.php");

$email = $_SESSION['login']['email'];
$password = $_SESSION['login']['password'];

try {
    $sqlus = $db->query("SELECT * FROM users WHERE email_user = '" . $email . "'");

    $resu = $sqlus->fetch_assoc();

    var_dump($resu);

    if (password_verify($password, $resu['password_user'])) {
        $_SESSION['connected'] = [
            'ID' => $resu['ID_user'],
            'lastname' => $resu['lastname_user'],
            'firstname' => $resu['firstname_user'],
            'email' => $resu['email_user'],
            'sex' => $resu['sex_user'],
            'activate' => $resu['activate_user'],
            'status' => $resu['status_user']
        ];

        echo $_SESSION['connected']['email'];
        unset($_SESSION['login']);
        header("Location: /urlsht.com/");
    } else {
        echo 'heu';
    }
} catch (Exception $e) {
    echo $e;
}

<?php
session_start();
require_once("../core/db.php");

echo $_SESSION['NewClient']['lastname'];
$lastname = $_SESSION['NewClient']['lastname'];
$firstname = $_SESSION['NewClient']['firstname'];
$email = $_SESSION['NewClient']['email'];
$sex = $_SESSION['NewClient']['sex'];
$birthday = $_SESSION['NewClient']['birthday'];
$password = $_SESSION['NewClient']['password'];
$activate = 1;
$status = 1;
echo $lastname . $firstname . $email . $sex . $birthday . $activate . $password . $status;

$sqlus = $db->prepare("SELECT * FROM users WHERE email_user = ?");
$sqlus->bind_param('s', $email);
$sqlus->execute();
$sqlus->store_result();


if ($sqlus->num_rows() == 0) {
    $sql = $db->prepare("INSERT INTO users(lastname_user, firstname_user, email_user, sex_user, birthday_user, password_user, activate_user, status_user) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param('ssssssii', $lastname, $firstname, $email, $sex, $birthday, $password, $activate, $status);
    $sql->execute();

    unset($_SESSION['NewClient']);

    header("Location: ../index.php");
} else {
    echo 'heu';
}

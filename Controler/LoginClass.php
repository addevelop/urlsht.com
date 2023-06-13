<?php

namespace ControllerClass;

session_start();

class Login
{
    private $_email;
    private $_password;

    public function __construct($email, $password)
    {
        $this->_email = $email;
        $this->_password = $password;
    }
    public function Logincheck()
    {
        if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['login'] = [
                'email' => $this->_email,
                'password' => $this->_password
            ];
            header("Location: ../Model/LoginModel.php");
        } else {
            echo 'heu';
        }
    }
}

if (isset($_POST)) {
    $_log = new Login($_POST['email'], $_POST['password']);
    $_log->Logincheck();
}

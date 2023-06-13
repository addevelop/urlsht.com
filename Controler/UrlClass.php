<?php

namespace ControllerClass;

session_start();

class UrlClass
{
    private $_Url;
    private $_IdClient;

    public function __construct($Url, $IdClient)
    {
        $this->_Url = $Url;
        $this->_IdClient = $IdClient;
    }

    public function Urlcheck()
    {
        if (!empty($this->_Url) && filter_var($this->_Url, FILTER_VALIDATE_URL)) {
            $_SESSION['Url'] = [
                'Url' => $this->_Url,
                'IdClient' => $this->_IdClient
            ];
            header("Location: ../Model/UrlModel.php");
        } else {
            echo ' t ' . $this->_IdClient;
        }
    }
}

if (isset($_POST)) {
    $IdCli = isset($_SESSION['connected']) ? $_SESSION['connected']['ID'] : 'NULL';
    $_urlCla = new UrlClass($_POST['urlreel'], $IdCli);
    $_urlCla->Urlcheck();
} else {
    echo 'heu';
}

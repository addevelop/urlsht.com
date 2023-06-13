<?php


namespace ControllerClass;

session_start();


class InscriptionClass
{
    public $_nom;
    public $_prenom;
    public $_email;
    public $_sex;
    public $_birthday;
    public $_password;
    public $_confirmPassword;
    private $_check = true;

    function __construct($nom, $prenom, $email, $sex, $birthday, $password, $confirmPassword)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_sex = $sex;
        $this->_birthday = $birthday;
        $this->_password = $password;
        $this->_confirmPassword = $confirmPassword;
    }


    public function InscriptionCheck()
    {

        if (preg_match("/^[a-zA-Z \-]{2,50}$/", $this->_nom)) {
            if (preg_match("/^[a-zA-Z \-]{2,50}$/", $this->_prenom)) {
                if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
                    if (preg_match("/^[1-3]{1}$/", $this->_sex)) {
                        if (preg_match("/^[0-9]{4}[\/|\-]{1}[0-9]{2}[\/|\-]{1}[0-9]{2}$/", $this->_birthday)) {
                            $list = explode("-", $this->_birthday);
                            $d = intval(Date("Y"));
                            if (($d - intval($list[0])) >= 18 && ($d - intval($list[0])) < 150 && preg_match("/^0[1-9]{1}|1[0-2]{1}$/", $list[1]) && preg_match("/^0[1-9]{1}|1[0-9]{1}|2[0-9]{1}|3[0-1]{1}$/", $list[2])) {
                                if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[?!&])[a-zA-Z\d?!&]{8,}$/", $this->_password)) {



                                    $_SESSION['NewClient'] = [
                                        'lastname' => $this->_nom,
                                        'firstname' => $this->_prenom,
                                        'email' => $this->_email,
                                        'sex' => $this->_sex,
                                        'birthday' => $this->_birthday,
                                        'password' => password_hash($this->_password, PASSWORD_DEFAULT)


                                    ];





                                    header("Location: ../Model/InscriptionModel.php");
                                } else {

                                    $this->_check = false;
                                    echo "password";
                                }
                            } else {
                                $this->_check = false;
                                echo "date";
                            }
                        } else {


                            $this->_check = false;
                            echo $this->_birthday;
                        }
                    } else {
                        $this->_check = false;
                        echo "email";
                    }
                }
            } else {
                $this->_check = false;
                echo "prenom";
            }
        } else {
            $this->_check = false;
            echo "nom";
        }
    }
}

if (isset($_POST)) {
    $_ins = new InscriptionClass($_POST['lastname'], $_POST['firstname'], $_POST['email'], $_POST['sex'], $_POST['birthday'], $_POST['password'], $_POST['password2']);
    $_ins->InscriptionCheck();
}

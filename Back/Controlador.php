<?php
//require_once("model/Receita.php");


class Controlador {
    private $query;

    public function __construct() {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {

        if (isset($_GET['funcao'])) {
            $f = $_GET['funcao'];
        } else if (isset($_POST['funcao'])) {
            $f = $_POST['funcao'];
        } else {
            $f = "";
        }
        

        switch ($f) {
            case 'realizarLogin':
                $this->realizarLogin();
                break;
            default:
                $this->home();
                break;
        }
    }

    public function realizarLogin(){
        $numeroDeIdentificacao = $_POST["numeroId"];
        $cpf = $_POST["cpf"];
        
        $usuarioExiste = $this->autenticarUsuario();

        if ($usuarioExiste) {
            require 'Front/HTML/tela_opcoes.php';
        } else {
            require 'Front/HTML/tela_inicial.php';
        }
    }

    public static function autenticarUsuario() {
        return true;
    }

    public function home() {
        require 'Front/HTML/tela_inicial.php';
    }


}

?>
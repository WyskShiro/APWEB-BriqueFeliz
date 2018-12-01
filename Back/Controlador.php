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
            case 'gerenciar_funcionario':
                $this->gerenciarFuncionario();
                break;
            case 'cadastrar_funcionario':
                $this->cadastrarFuncionario();
                break;
            case 'alterar_funcionario':
                $this->alterarFuncionario();
                break;
            case 'excluir_funcionario':
                $this->excluirFuncionario();
                break;
            case 'alterar_permissao':
                $this->alterarPermissao();
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

    /**
     * Funcionário
     */

    public function gerenciarFuncionario() {
        require 'Front/HTML/funcionario/gerenciar_funcionario.php';
    }


    public function cadastrarFuncionario() {
        require 'Front/HTML/funcionario/cadastrar_funcionario.php';
    }

    //TODO: dar fetch no banco de dados da lista de funcs e retornar 
    public function alterarFuncionario() {
        $listaFuncionarios = [];

        require 'Front/HTML/funcionario/cadastrar_funcionario.php';
    }

    public function excluirFuncionario() {
        require 'Front/HTML/funcionario/excluir_funcionario.php';
    }

    public function alterarPermissao() {
        require 'Front/HTML/funcionario/alterar_permissao.php';
    }


    /**
     * Cliente
     */

     /**
     * Fornecedor
     */

     /**
     * Produto
     */

     /**
     * Venda
     */

    /**
     * Outros
     */
    public static function autenticarUsuario() {
        return true;
    }

    public function home() {
        require 'Front/HTML/tela_inicial.php';
    }


}

?>
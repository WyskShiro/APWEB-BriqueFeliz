<?php
require_once("Back/model/FuncionarioFactory.php");
require_once("Back/model/Funcionario.php");


class Controlador {
    private $funcionarioFactory;

    public function __construct() {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {

        $this->funcionarioFactory = new FuncionarioFactory();
        $f = "";

        if (isset($_GET['funcao'])) {
            $f = $_GET['funcao'];
            unset($_GET["funcao"]);
            //var_dump($f);
        }
        if (isset($_POST['funcao'])) {
            $f = $_POST['funcao'];
            unset($_POST["funcao"]);
            //var_dump($f);
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
            case 'cadastrar_funcionario_banco':
                $this->cadastrarFuncionarioBanco();
                break;
            case 'alterar_funcionario':
                $this->alterarFuncionario();
                break;
            case 'excluir_funcionario':
                $this->excluirFuncionario();
                break;
            case 'excluir_funcionario_banco':
                $this->excluirFuncionarioBanco();
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

    public function cadastrarFuncionarioBanco() {
        //return $_POST["nomeFuncionario"];
        $funcionario = new Funcionario(
        -1, // -1 pois como o ID é incremental, não é necessário a informação passada (mas só da pra ter um construtor, ai não da pra ter um sem isso)
        $_POST["nome"], 
        $_POST["cpf"],
        $_POST["endereco"],
        $_POST["cidade"],
        $_POST["estado"],
        $_POST["telefoneResidencial"],
        $_POST["telefoneCelular"],
        $_POST["email"],
        $_POST["dataContratacao"],
        1 //1 pois todo usuário cadastrado deve ser normal/não admin (eu acho)
    );

        //var_dump($funcionario);

        $resultado = $this->funcionarioFactory->salvar($funcionario);

        require 'Front/HTML/funcionario/cadastrar_funcionario.php';
    }

    //TODO: dar fetch no banco de dados da lista de funcs e retornar 
    public function alterarFuncionario() {
        $listaFuncionarios = [];

        require 'Front/HTML/funcionario/cadastrar_funcionario.php';
    }

    public function excluirFuncionario() {
        $listaFuncionarios = $this->funcionarioFactory->listar();

        //var_dump ($listaFuncionarios);

        require 'Front/HTML/funcionario/excluir_funcionario.php';
    }

    public function excluirFuncionarioBanco() {
        $resultado = $this->funcionarioFactory->deletar($_POST["funcionario_id"]);
        $listaFuncionarios = $this->funcionarioFactory->listar();

        //var_dump ($listaFuncionarios);
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
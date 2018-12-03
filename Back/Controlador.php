<?php
require_once("Back/model/FuncionarioFactory.php");
require_once("Back/model/Funcionario.php");

require_once("Back/model/Produto.php");
require_once("Back/model/ProdutoFactory.php");

require_once("Back/model/Fornecedor.php");
require_once("Back/model/FornecedorFactory.php");

require_once("Back/model/Produto_estoque.php");
require_once("Back/model/Produto_estoqueFactory.php");


class Controlador {
    private $funcionarioFactory;
    private $produtoFactory;
    private $fornecedorFactory;
    private $produtoEstoqueFactory;


    public function __construct() {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    public function init() {

        $this->funcionarioFactory = new FuncionarioFactory();
        $this->produtoFactory = new ProdutoFactory();
        $this->fornecedorFactory = new FornecedorFactory();
        $this->produtoEstoqueFactory = new Produto_estoqueFactory();

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

            /**
             * Funcionário
             *  */   

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
            case 'alterar_permissao_banco':
                $this->alterarPermissaoBanco();
                break;
            
            /**
             * Produto
             */

            case 'cadastrar_produto':
                $this->cadastrarProduto();
                break;
            case 'cadastrar_produto_banco':
                $this->cadastrarProdutoBanco();
                break;
            case 'excluir_produto':
                $this->excluirProduto();
                break;
            case 'excluir_produto_banco':
                $this->excluirProdutoBanco();
                break;
            default:
                $this->home();
                break;
            

            /**
             * Fornecedor
             */
            case 'cadastrar_fornecedor':
                $this->cadastrarFornecedor();
                break;
            case 'cadastrar_fornecedor_banco':
                $this->cadastrarFornecedorBanco();
                break;
            case 'excluir_fornecedor':
                $this->excluirFornecedor();
                break;
            case 'excluir_fornecedor_banco':
                $this->excluirFornecedorBanco();
                break;

            /**
             * Produto - Estoque
             */

            case 'cadastrar_estoque':
                $this->cadastrarEstoque();
                break;
            case 'cadastrar_estoque_banco':
                $this->cadastrarEstoqueBanco();
                break;
            case 'excluir_estoque':
                $this->excluirEstoque();
                break;
            case 'excluir_estoque_banco':
                $this->excluirEstoqueBanco();
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
        1 //1 pois todos usuários cadastrados devem ser normal/não admin (eu acho)
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
        $listaFuncionarios = $this->funcionarioFactory->listar();

        require 'Front/HTML/funcionario/alterar_permissao.php';
    }

    public function alterarPermissaoBanco() {
        $resultado = $this->funcionarioFactory->inverterPermissao($_POST["funcionario_id"], $_POST["funcionario_nivel_permissao"]);
        $listaFuncionarios = $this->funcionarioFactory->listar();

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

    public function cadastrarProduto() {
        require 'Front/HTML/produto/cadastrar_produto.php';
    }

    public function cadastrarProdutoBanco() {
        $produto = new Produto(
            -1, // -1 pois como o ID é incremental, não é necessário a informação passada (mas só da pra ter um construtor, ai não da pra ter um sem isso)
            $_POST["nome"], 
            $_POST["codigoDeBarras"], 
            $_POST["descricao"]
        );
        
        $resultado = $this->produtoFactory->salvar($produto);
        
        require 'Front/HTML/produto/cadastrar_produto.php';
    }

    public function excluirProduto() {
        $listaProdutos = $this->produtoFactory->listar();

        //var_dump ($listaFuncionarios);

        require 'Front/HTML/produto/excluir_produto.php';
    }

    public function excluirProdutoBanco() {
        $resultado = $this->produtoFactory->deletar($_POST["produto_id"]);
        $listaProdutos = $this->produtoFactory->listar();

        //var_dump ($listaFuncionarios);
        require 'Front/HTML/produto/excluir_produto.php';
    }
    

     /**
     * Venda
     */

     /**
      * Fornecedor
      */

    public function cadastrarFornecedor() {
        require 'Front/HTML/fornecedor/cadastrar_fornecedor.php';
    }

    public function cadastrarFornecedorBanco() {
        $fornecedor = new Fornecedor(
            -1, // -1 pois como o ID é incremental, não é necessário a informação passada (mas só da pra ter um construtor, ai não da pra ter um sem isso)
            $_POST["cnpj"], 
            $_POST["nomeFantasia"], 
            $_POST["razaoSocial"], 
            $_POST["endereco"], 
            $_POST["cidade"], 
            $_POST["estado"], 
            $_POST["telefone"], 
            $_POST["email"]
        );

        $resultado = $this->fornecedorFactory->salvar($fornecedor);
        
        require 'Front/HTML/fornecedor/cadastrar_fornecedor.php';
    }

    public function excluirFornecedor() {
        $listaFornecedores = $this->fornecedorFactory->listar();

        //var_dump ($listaFuncionarios);

        require 'Front/HTML/fornecedor/excluir_fornecedor.php';
    }

    public function excluirFornecedorBanco() {
        $resultado = $this->fornecedorFactory->deletar($_POST["fornecedor_id"]);
        $listaFornecedores = $this->fornecedorFactory->listar();

        //var_dump ($listaFuncionarios);
        require 'Front/HTML/fornecedor/excluir_fornecedor.php';
    }



    /**
      * Produto - Estoque
      */

      public function cadastrarEstoque() {
        $listaFornecedores = $this->fornecedorFactory->listar();
        $listaProdutos = $this->produtoFactory->listar();

        require 'Front/HTML/estoque/cadastrar_estoque.php';
    }

    public function cadastrarEstoqueBanco() {
        $estoque = new Produto_estoque(
            -1, // -1 pois como o ID é incremental, não é necessário a informação passada (mas só da pra ter um construtor, ai não da pra ter um sem isso)
            $_POST["precoCompra"], 
            $_POST["precoVenda"], 
            $_POST["quantidade"], 
            $_POST["listaFornecedores"], 
            $_POST["listaProdutos"]
        );

        $resultado = $this->produtoEstoqueFactory->salvar($estoque);
        
        require 'Front/HTML/estoque/cadastrar_estoque.php';
    }

    public function excluirEstoque() {
        $listaEstoques = $this->produtoEstoqueFactory->listar();
        //var_dump($listaEstoques);

        //var_dump ($listaFuncionarios);

        require 'Front/HTML/estoque/excluir_estoque.php';
    }

    public function excluirEstoqueBanco() {
        //var_dump($_POST["produto_estoque_id"]);
        $resultado = $this->produtoEstoqueFactory->deletar($_POST["produto_estoque_id"]);
        $listaEstoques = $this->produtoEstoqueFactory->listar();

        //var_dump ($listaFuncionarios);
        require 'Front/HTML/estoque/excluir_estoque.php';
    }

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
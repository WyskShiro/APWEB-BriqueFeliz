<div class="container-fluid">

    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">

                    <!-- Vendas -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarVendas" aria-expanded="false"
                        aria-controls="collapseGerenciarVendas">
                        <a class="nav-link" href="#">
                            <span data-feather="layers"></span>
                            Gerenciar Vendas
                        </a>
                    </li>


                    <!-- Funcionarios -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarFuncionario"
                        aria-expanded="false" aria-controls="collapseGerenciarFuncionario">
                        <a class="nav-link active" href="#">
                            <span data-feather="home"></span>
                            Gerenciar Funcionários <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <div class="collapse" id="collapseGerenciarFuncionario">
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=cadastrar_funcionario">Adicionar Funcionário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Alterar dados do Funcionário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=excluir_funcionario">Excluir Funcionário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=alterar_permissao">Alterar permissão do Funcionário</a>
                        </li>
                    </div>

                    <!-- Produtos -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarProduto" aria-expanded="false"
                        aria-controls="collapseGerenciarProduto">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Gerenciar Produtos
                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarProduto">
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=cadastrar_produto">Adicionar Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=excluir_produto">Excluir Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=cadastrar_estoque">Adicionar Estoque de um Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=alterar_estoque">Alterar Estoque de um Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Alterar descrição de um Produto</a>
                        </li>
                    </div>

                    <!-- Clientes -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarClientes" aria-expanded="false"
                        aria-controls="collapseGerenciarClientes">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Gerenciar Clientes
                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarClientes">

                    </div>

                    <!-- Fornecedores -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarFornecedores"
                        aria-expanded="false" aria-controls="collapseGerenciarFornecedores">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Gerenciar Fornecedores
                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarFornecedores">
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=cadastrar_fornecedor">Adicionar Fornecedor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?funcao=excluir_fornecedor">Excluir Fornecedor</a>
                        </li>
                    </div>

                    <!-- Relatorios -->
                    <li class="nav-item" data-toggle="collapse" data-target="#collapseGerenciarRelatorios"
                        aria-expanded="false" aria-controls="collapseGerenciarRelatorios">
                        <a class="nav-link" href="#">
                            <span data-feather="file"></span>
                            Gerenciar Relatorios
                        </a>
                    </li>
                    <div class="collapse" id="collapseGerenciarRelatorios">

                    </div>

                </ul>

            </div>

        </nav>
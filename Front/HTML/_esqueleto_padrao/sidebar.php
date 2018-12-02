<!--
--------- Sidebar padrão nas páginas da aplicação 
-->

<!--
    +++++++++++++ TODO: Se não for admin -> restringir links clicáveis
-->

<div class="col-sm-3 sidenav">
    <ul>

        <!--
    ----- Funcionário
-->
        <li class="nav-item">
            <!--
        <a class="nav-link" href="?funcao=gerenciar_funcionario">Gerenciar Funcionários</a>
    -->
            <a class="nav-link"><b>Gerenciar Funcionários</b></a>

        </li>
        <ul class="nav flex-column">
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
        </ul>

        <!--
    ----- Produto
-->
        <li class="nav-item">
            <a class="nav-link"><b>Gerenciar Produtos</b></a>
        </li>


        <ul class="nav flex-column">
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
        </ul>
        <!--
    ----- Cliente
-->
        <li class="nav-item">
            <a class="nav-link">Gerenciar Clientes</a>
        </li>

        <!--
    ----- Fornecedor
-->
        <li class="nav-item">
            <a class="nav-link"><b>Gerenciar Fornecedores</b></a>
        </li>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="?funcao=cadastrar_fornecedor">Adicionar Fornecedor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?funcao=excluir_fornecedor">Excluir Fornecedor</a>
            </li>
        </ul>

        <!--
    ----- Relatório
-->
        <li class="nav-item">
            <a class="nav-link" href="#">Gerenciar Relatórios</a>
        </li>

        <!--
    ----- Venda
-->
        <li class="nav-item">
            <a class="nav-link" href="#">Gerenciar Vendas</a>
        </li>
    </ul>
</div>
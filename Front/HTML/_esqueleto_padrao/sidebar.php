<!--
--------- Sidebar padrão nas páginas da aplicação 
-->

<!--
    +++++++++++++ TODO: Se não for admin -> restringir links clicáveis
-->

<div class="container-fluid">
    <ul class="nav flex-column">

        <!--
            ----- Funcionário
        -->
        <li class="nav-item">
            <!--
                <a class="nav-link" href="?funcao=gerenciar_funcionario">Gerenciar Funcionários</a>
            -->
            <a class="nav-link">Gerenciar Funcionários</a>

        </li>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="?funcao=cadastrar_funcionario">Adicionar Funcionário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?funcao=alterar_funcionario">Alterar dados do Funcionário</a>
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
            <a class="nav-link" href="#">Gerenciar Produtos</a>
        </li>

        <!--
            ----- Cliente
        -->
        <li class="nav-item">
            <a class="nav-link" href="#">Gerenciar Clientes</a>
        </li>

        <!--
            ----- Fornecedor
        -->
        <li class="nav-item">
            <a class="nav-link" href="#">Gerenciar Fornecedores</a>
        </li>

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
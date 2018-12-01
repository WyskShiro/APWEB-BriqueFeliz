<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brinque Feliz</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'Front/HTML/_esqueleto_padrao/esqueleto.php'?>

    <div class="container">
        <h3>Adicionar Funcionário</h3>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-outline-success">Salvar</button>
            </li>
        </ul>
    </div>

    <!--
        ----- TODO se tiver dados de funcionário vindo do servidor -> carregá-los nos elementos
    -->
    <div class="container">
        <?php
        if (isset($resultado)) {
            if ($resultado) {
        ?>

        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>Funfou</span>
        </div>

        <?php
        } else {
        ?>

        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span>Não Funfou</span>
        </div>

        <?php

            }
        }
        ?>
        <form method="post">
            <input type="hidden" name="funcao" value="cadastrar_funcionario_banco" />

            <?php
            /**
             * SE TIVER VINDO DADOS -> SETAR UMA VARIAVEL DE CONTROLE DE ALTERAR COMO TRUE
             * **** UTILIZAR PARA DIFERENCIAR ALTERAR DE ADICIONAR
             */
            ?>

            <div class="form-group">
                <label for="nomeFuncionario">Nome:</label>
                <input type="text" class="form-control" id="nomeFuncionario" name="nome" aria-describedby="emailHelp"
                    placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="cpfFuncionario">CPF</label>
                <input type="text" class="form-control" id="cpfFuncionario" name="cpf" placeholder="xxx.xxx.xxx-xx">
            </div>
            <div class="form-group">
                <label for="enderecoFuncionario">Endereço</label>
                <input type="text" class="form-control" id="enderecoFuncionario" name="endereco" placeholder="Endereço">
            </div>
            <div class="form-group">
                <label for="cidadeFuncionario">Cidade</label>
                <input type="text" class="form-control" id="cidadeFuncionario" name="cidade" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="estadoFuncionario">Estado</label>
                <input type="text" class="form-control" id="estadoFuncionario" name="estado" placeholder="Estado">
            </div>
            <div class="form-group">
                <label for="telefoneResidencialFuncionario">Telefone Residencial</label>
                <input type="text" class="form-control" id="telefoneResidencialFuncionario" name="telefoneResidencial"
                    placeholder="(xx) xxxx - xxxx">
            </div>
            <div class="form-group">
                <label for="telefoneCelularFuncionario">Telefone Celular</label>
                <input type="text" class="form-control" id="telefoneCelularFuncionario" name="telefoneCelular"
                    placeholder="(xx) xxxxx-xxxx">
            </div>
            <div class="form-group">
                <label for="emailFuncionario">Email</label>
                <input type="email" class="form-control" id="emailFuncionario" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="dataContratacaoFuncionario">Data de contratação</label>
                <input type="date" class="form-control" id="dataContratacaoFuncionario" name="dataContratacao"
                    placeholder="">
            </div>

            <input type="submit" value='Enviar' class="btn btn-primary" />
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
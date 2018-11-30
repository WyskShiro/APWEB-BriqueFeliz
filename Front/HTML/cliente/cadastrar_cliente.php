<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brinque Feliz</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
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

    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="nomeCliente">Nome:</label>
                <input type="text" class="form-control" id="nomeCliente" aria-describedby="emailHelp" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="cpfCliente">CPF</label>
                <input type="text" class="form-control" id="cpfCliente" placeholder="xxx.xxx.xxx-xx">
            </div>
            <div class="form-group">
                <label for="enderecoCliente">Endereço</label>
                <input type="text" class="form-control" id="enrerecoCliente" placeholder="Endereço">
            </div>
            <div class="form-group">
                <label for="cidadeCliente">Cidade</label>
                <input type="text" class="form-control" id="cidadeCliente" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="estadoCliente">Estado</label>
                <input type="text" class="form-control" id="estadoCliente" placeholder="Estado">
            </div>
            <div class="form-group">
                <label for="telefoneCliente">Telefone:</label>
                <input type="text" class="form-control" id="telefoneCliente" placeholder="(xx) xxxx - xxxx">
            </div>
            <div class="form-group">
                <label for="emailCliente">Email</label>
                <input type="email" class="form-control" id="emailCliente" placeholder="Email">
            </div>
 
            <button type="submit" value='cadastrarCliente' class="btn btn-primary">Enviar</button>
        </form>
    </div>

   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
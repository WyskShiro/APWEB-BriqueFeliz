<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Brinque Feliz</h1>
        <h2>Brinque até morrer</h2>

        <div class="row">
            <div class="col-sm-6">
                <h3>Entrar</h3>

                <!--
                FORMULÁRIO PARA LOGAR
            -->
                <form class="form-inline" method="post">
                    <input type="hidden" name="funcao" value="realizarLogin">

                    <div class="form-group">
                        <label for="numeroId"><span class="glyphicon glyphicon-user"></span></label>
                        <input id="numeroId" name="numeroId" class="form-control" type="text" placeholder="Número de Identificação">
                    </div>

                    <div class="form-group">
                        <label for="cpf"><span class="glyphicon glyphicon-lock"></span></label>
                        <input id="cpf" name="cpf" class="form-control" type="text" placeholder="CPF">
                    </div>

                    <input type="submit" value="Entrar">
                </form>
                <!----------------------------->

            </div>

            <!--IMAGEM DO BRINQUE FELIZ-->
            <div class="col-sm-6">
                <img src="Recursos/exemplo.jpeg" alt="IMAGEM DO BRINQUE FELIZ">
            </div>
        </div>

    </div>



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
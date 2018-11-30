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
        <div class="row">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <h1>Brinque Feliz</h1>
                        <h2>Era uma vez uma grande loja...</h2>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6">
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
                </div>
            </div>

            <div class="col">
                <div class="col-sm-6">
                   <img src="Recursos/exemplo.jpeg" alt="IMAGEM DO BRINQUE FELIZ">
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
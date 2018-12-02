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
    <div class="container-fluid">
        <div class="row content">
            <?php include 'Front/HTML/_esqueleto_padrao/esqueleto.php' ?>

            <div class="col-sm-9">
                <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>


                <h3>Excluir Produto</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome do Produto</th>
                            <th>Deletar ?</th>
                        </tr>
                    </thead>
                    <!--
                ++++++ TODO: Para cada produto, ....
            -->
                    <?php
                foreach($listaProdutos as $produto) {

                
            ?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $produto->getNome() ?>
                            </td>
                            <td>
                                <form method="post">
                                    <input type="hidden" name="funcao" value="excluir_produto_banco">
                                    <input type="hidden" name="produto_id" value="<?php echo $produto->getProdutoId()?>">
                                    <input class="btn btn-danger" type="submit" value="Deletar">
                                </form>
                            </td>
                        </tr>


                        <?php
                    }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
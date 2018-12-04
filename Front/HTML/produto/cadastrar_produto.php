<?$listaCategoria = $this->categoriaFactory->listar();?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" type="text/css" rel="stylesheet">

    <title>Brinque Feliz</title>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'Front/HTML/_esqueleto_padrao/esqueleto.php' ?>

        
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

<!-- Icons -->
<script>
    feather.replace()
</script>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Adicionar produto</h1>

            <div class="btn-toolbar mb-2 mb-md-0">

                <button type="button" class="btn btn-outline-danger">Cancelar</button>
                <button type="button" class="btn btn-outline-success">Salvar</button>
            </div>

        </div>

        <div class="col-sm-9">
            <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>

            <form method="POST">
                <input type="hidden" name="funcao" value="cadastrar_produto_banco" />


                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="codigoDeBarrasProduto">Código de barras</label>
                    <input type="number" class="form-control" id="codigoDeBarras" name="codigoDeBarras" placeholder="Código">
                </div>

                <div class="form-group">
                    <label for="categoriaProduto">Categoria:</label>
                    <select class="form-control" name="categoriaProduto" id="categoriaProduto">
                        <? foreach($listaCategoria as $categoria) { ?>
                            <option value="<?=$categoria->getCategoriaId();?>"><?=$categoria->getNome();?></option>
                        <?}?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                </div>
                <button type="submit" value='cadastrarProduto' class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </main>

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
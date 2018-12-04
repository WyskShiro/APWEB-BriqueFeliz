<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 03/12/18
 * Time: 19:16
 */
// Variáveis para listagem
$listaProdutosInicial = $this->produtoFactory->listarProdutoEstoque();
?>


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

<?php include 'Front/HTML/_esqueleto_padrao/esqueleto.php' ?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Registrar Venda</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <button type="button" class="btn btn-outline-danger">Cancelar</button>
            <button type="button" class="btn btn-outline-success">Ir para carrinho de compras</button>
        </div>
    </div>
    <div class="col-sm-9">
        <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>
    </div>

    <h6 for="buscaCodigoDeBarra">Código de barras do produto:</h6>
    <input type="text" class="form-control" id="codigoDeBarras" aria-describedby="buscaCodigo" placeholder="Código do produto" oninput="JavaScript: return atualizarLista(codigoDeBarras);">
    <form method="POST">
        <input type="hidden" name="funcao" value="adicionar_carrinho" />
        <div class="form-group">
            <h6>Selecione o produto:</h6>
            <select class="custom-select" size="4" id="produtoVenda" name="produtoVenda" ondblclick="moveFormulario('formulario_origem','formulario_destino','formulario_nomes',1);">
                <?// listar produtos
                foreach($listaProdutosInicial as $produto) {
                    ?>
                    <option value="<?=$produto->getProdutoEstoqueId();?>"><?=$produto->getNome();?></option>
                <?}?>
            </select>
        </div>
        <div class="form-group">
            <h6>Informe a quantidade da venda:</h6>
            <input type="number" class="form-control" id="quantidadeVenda" aria-describedby="buscaCodigo" placeholder="Quantidade"">
        </div>
        <button type="submit" class="btn btn-primary" value="adicionar_carrinho">Adicionar ao Carrinho de Compras</button>
    </form>


</main>

</div>
</div>


<script>

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
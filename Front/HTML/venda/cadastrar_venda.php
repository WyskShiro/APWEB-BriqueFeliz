<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 03/12/18
 * Time: 19:16
 */
// Variáveis para listagem
$listaProdutosInicial = $this->produtoFactory->listar();
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
        </div>
    </div>
            <h6 for="buscaCodigoDeBarra">Código de barras do produto:</h6>
            <input type="text" class="form-control" id="codigoDeBarras" aria-describedby="buscaCodigo" placeholder="Código do produto" oninput="JavaScript: return atualizarLista(codigoDeBarras);">
            <h6>Selecione o produto:</h6>
            <select class="custom-select" size="2" id="listaProdutos" name="listaProdutos">
                <?// listar produtos
                foreach($listaProdutosInicial as $produto) {
                ?>
                    <option value="<?=$produto->getCodigoDeBarras();?>"><?=$produto->getNome();?></option>
                <?}?>
            </select>
            <button type="submit" class="btn btn-primary" onclick="escolherProduto()">Selecionar Produto</button>

    <div id="produtoSelecionado" style="display: none;">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Quantidade disponível</th>
                <th>Preço de venda</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td id="nomeProduto">
                </td>
                <td id="quantidadeDisponivel">
                </td>
                <td id="precoVenda">
                </td>
            </tr>
            </tbody>
        </table>
    </div>



    <div class="col-sm-9">
        <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>



    </div>
</main>

</div>
</div>


<script>


    function atualizarLista(codigoDeBarras) {

    }

    function escolherProduto() {
        document.getElementById("produtoSelecionado").style.display = "";
       var codigo =  document.getElementById("listaProdutos").value;
       <?
        $codigo = "<script>document.write(codigo)</script>";
        if(isset($codigo) && $codigo != ""){
            $produto = $this->produtoEstoqueFactory->buscarPorCodigo($codigo);
            var_dump($produto);
        }
        ?>
        document.getElementById("nomeProduto").innerHTML = "<?if(isset($produto["nome"]))echo $produto["nome"];?>";
        document.getElementById("quantidadeDisponivel").innerHTML = "<?if(isset($produto["quantidade"]))echo $produto["quantidade"];?>";
        document.getElementById("precoVenda").innerHTML = "<?if(isset($produto["precoVenda"]))echo $produto["precoVenda"];?>";
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
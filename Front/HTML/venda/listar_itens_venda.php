<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 04/12/18
 * Time: 07:57
 */?>
<?
$listaProdutosVenda = $this->produtoVendaFactory->listarVenda($venda_id);
$valorTotalGeral = 0;
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
        <h1 class="h2">Itens da Venda <?=$venda_id?></h1>
        <form method="post">
            <div class="form-group">
                <button type="submit" class="btn btn-outline-danger" value="listar_venda">Voltar</button>
            </div>
            <input type="hidden" name="funcao" value="listar_venda" />
        </form>
    </div>

    <div class="col-sm-9">
        <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome do produto</th>
                <th>Quantidade</th>
                <th>Preço vendido</th>
                <th>Preço total</th>
            </tr>
            </thead>
            <tbody>
            <?foreach ($listaProdutosVenda as $produto){
                $produtoEstoque = $this->produtoEstoqueFactory->buscar($produto->getProdutoEstoqueId());
                $produtoDesc = $this->produtoFactory->buscar($produtoEstoque[0]->getProduto_id());
                ?>
                <tr>
                    <td id="nomeProduto[<?=$produto->getProdutoEstoqueId();?>]"><?=$produtoDesc[0]->getNome();?></td>

                    <td id="quantidade[<?=$produto->getProdutoEstoqueId();?>]"><?=$produto->getQuantitade();?></td>

                    <td id="precoVendido[<?=$produto->getProdutoEstoqueId();?>]"><?=number_format($produtoEstoque[0]->getPreco_venda(), 2, ',', '.');?></td>

                    <?
                    $valorParcial = $produto->getQuantitade() * $produtoEstoque[0]->getPreco_venda();
                    $valorTotalGeral += $valorParcial;
                    ?>
                    <td id="precoTotal[<?=$produto->getProdutoEstoqueId();?>]"><?=number_format($valorParcial, 2, ',', '.');?></td>

                </tr>
            <?}?>
            </tbody>
        </table>
        <h5>Valor total da compra em R$: <?=number_format($valorTotalGeral, 2, ',', '.');?>.</h5>
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


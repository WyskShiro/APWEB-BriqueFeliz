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
    <link href="main.css" type="text/css" rel="stylesheet">

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
        <h1 class="h2">Carrinho de Compras</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form method="post">
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success" value="registrar_venda">Adicionar mais itens</button>
                </div>
                <input type="hidden" name="funcao" value="registrar_venda" />
            </form>
        </div>

    </div>

    <div class="col-sm-9">
        <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Quantidade da venda</th>
                <th>Preço unitário</th>
                <th>Preço total</th>
                <th>Deletar produto da venda</th>
            </tr>
            </thead>
            <tbody>
            <?foreach ($listaProdutosVenda as $produtoVenda){
                //Pegar informações dos produtos já que só tem o id do produto_estoque, quantidade de itens na venda
                $produtoEstoque = $this->produtoEstoqueFactory->buscar($produtoVenda->getProdutoEstoqueId());
                $produto = $this->produtoFactory->buscar($produtoEstoque[0]->getProduto_id());
                ?>
            <tr>
                <td id="nomeProduto[<?=$produtoVenda->getProdutoEstoqueId();?>]"><?=$produto[0]->getNome();?></td>

                <td id="quantidadeDisponivel[<?=$produtoVenda->getProdutoEstoqueId();?>]"><?=$produtoVenda->getQuantitade();?></td>

                <td id="precoUnitario[<?=$produtoVenda->getProdutoEstoqueId();?>]"><?=number_format(($produtoEstoque[0]->getPreco_venda()), 2, ',', '.');?></td>

                <?
                $valorTotalItem = $produtoVenda->getQuantitade()*$produtoEstoque[0]->getPreco_venda();
                $valorTotalGeral += $valorTotalItem;
                ?>
                <td id="precoTotal[<?=$produtoVenda->getProdutoEstoqueId();?>]"><?=number_format($valorTotalItem, 2, ',', '.');?></td>

                <td id="deletar[<?=$produtoVenda->getProdutoEstoqueId();?>]">
                    <form method="post">
                        <input type="hidden" name="funcao" value="excluir_produto_carrinho">
                        <input type="hidden" name="produto_estoque_id" value="<?=$produtoEstoque[0]->getProdutoEstoqueId();?>">
                        <input class="btn btn-danger" type="submit" value="Deletar">
                    </form>
                </td>
            </tr>
            <?}?>
            </tbody>
        </table>
        <div class="btn-toolbar mb-2 mb-md-0">
            <form method="post">
                <h6>Valor total da compra em R$: <?=number_format($valorTotalGeral, 2, ',', '.');?>.</h6>
                <input type="hidden" name="valor_total" value="<?=$valorTotalGeral?>"/>
                <div class="form-group">
                    <h6>Forma de pagamento:</h6>
                    <select class="form-control" id="forma_pagamento" name="forma_pagamento">
                        <option value="Dinheiro" id="forma_pagamento" name="forma_pagamento">Dinheiro</option>
                        <option value="Cartão" id="forma_pagamento" name="forma_pagamento">Cartão</option>
                        <option value="Cheque" id="forma_pagamento" name="forma_pagamento">Cheque</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-success" value="finalizar_venda">Finalizar Venda</button>
                </div>
                <input type="hidden" name="funcao" value="finalizar_venda" />
                <input type="hidden" name="venda_id" value="<?=$venda_id;?>" />
            </form>
        </div>
    </div>
</main>
</div>
</div>

<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<!-- Icons -->
<script>
    feather.replace()
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>
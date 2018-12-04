<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 04/12/18
 * Time: 06:55
 */?>
<?
$listaVenda = $this->vendaFactory->listar();
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
        <h1 class="h2">Vendas realizadas</h1>

    </div>

    <div class="col-sm-9">
        <?php include 'Front/HTML/_esqueleto_padrao/resultado_operacao.php'?>


        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Número da venda</th>
                <th>Valor Total</th>
                <th>Método de Pagamento</th>
                <th>Visualizar Itens</th>
                <th>Deletar venda</th>
            </tr>
            </thead>
            <tbody>
            <?foreach ($listaVenda as $venda){?>
                <tr>
                    <td id="numeroVenda[<?=$venda->getVendaId();?>]"><?=$venda->getVendaId();?></td>

                    <td id="valorTotal[<?=$venda->getVendaId();?>]"><?=number_format($venda->getValorTotal(), 2, ',', '.');?></td>

                    <td id="metodoPagamento[<?=$venda->getVendaId();?>]"><?=$venda->getMetodoPagamento();?></td>

                    <td id="deletar[<?=$venda->getVendaId();?>]">
                        <form method="post">
                            <input type="hidden" name="funcao" value="listar_produtos_da_venda">
                            <input type="hidden" name="venda_id" value="<?=$venda->getVendaId();?>">
                            <input class="btn btn-danger" type="submit" value="Ver itens">
                        </form>
                    </td>

                    <td id="deletar[<?=$venda->getVendaId();?>]">
                        <form method="post">
                            <input type="hidden" name="funcao" value="excluir_venda">
                            <input type="hidden" name="venda_id" value="<?=$venda->getVendaId();?>">
                            <input class="btn btn-danger" type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            <?}?>
            </tbody>
        </table>
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

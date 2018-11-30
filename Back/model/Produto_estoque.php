<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto_estoque
 *
 * @author Murilo Rei Delas
 */
class Produto_estoque {

    private preco_compra;
    private preco_venda;
    private quantitade;
    private fornecedor_id;
    private produto_id;


    public function Produto_estoque($preco_venda, $quantitade) {
        $this->preco_venda = $preco_venda;
        $this->quantitade = $quantitade;
    }

    public function getPreco_compra() {
        return $this->preco_compra;
    }

    public function getPreco_venda() {
        return $this->preco_venda;
    }

    public function getQuantidade() {
        return $this->quantitade;
    }

    public function getFornecedor_id() {
        return $this->fornecedor_id;
    }

    public function getProduto_id() {
        return $this->produto_id;
    }

}

?>
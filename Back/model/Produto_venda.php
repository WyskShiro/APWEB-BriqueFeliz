<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto_venda
 *
 * @author Murilo Rei Delas
 */
class Produto_venda {

    private Produto_venda_id;
    private produto_estoque_id;
    private quantitade;


    public function Produto_venda($produto_estoque_id, $quantitade) {
        $this->produto_estoque_id = $produto_estoque_id;
        $this->quantitade = $quantitade;
    }

    public function getProduto_venda_id() {
        return $this->Produto_venda_id;
    }

    public function getProduto_estoque_id() {
        return $this->produto_estoque_id;
    }

    public function getQuantidade() {
        return $this->quantitade;
    }

}

?>
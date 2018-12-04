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

    
    private $produto_estoque_id;
    private $preco_compra;
    private $preco_venda;
    private $quantitade;
    private $fornecedor_id;
    private $produto_id;


    public function Produto_estoque($produto_estoque_id, $preco_compra, $preco_venda, $quantitade, $fornecedor_id, $produto_id) {
        $this->produto_estoque_id = $produto_estoque_id;
        $this->preco_compra = $preco_compra;
        $this->preco_venda = $preco_venda;
        $this->quantitade = $quantitade;
        $this->fornecedor_id = $fornecedor_id;
        $this->produto_id = $produto_id;
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

    /**
     * @return mixed
     */
    public function getProdutoEstoqueId()
    {
        return $this->produto_estoque_id;
    }

    /**
     * @return mixed
     */
    public function getQuantitade()
    {
        return $this->quantitade;
    }



}

?>
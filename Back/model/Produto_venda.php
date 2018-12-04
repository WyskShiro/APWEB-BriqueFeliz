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

    private $venda_id;
    private $produto_estoque_id;
    private $quantitade;

    /**
     * Produto_venda constructor.
     * @param $venda_id
     * @param $produto_estoque_id
     * @param $quantitade
     */
    public function Produto_venda($venda_id, $produto_estoque_id, $quantitade)
    {
        $this->venda_id = $venda_id;
        $this->produto_estoque_id = $produto_estoque_id;
        $this->quantitade = $quantitade;
    }

    /**
     * @return mixed
     */
    public function getVendaId()
    {
        return $this->venda_id;
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
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto
 *
 * @author Murilo Rei Delas
 */
class Produto {

    private $codigo_de_barras;
    private $nome;
    private $descricao;
    private $preco_de_venda;
    private $quantidade_em_estoque;

    public function Produto($nome, $quantidade_em_estoque) {
        $this->nome = $nome;
        $this->quantidade_em_estoque = $quantidade_em_estoque;
    }

    public function getCodigo_de_barras() {
        return $this->codigo_de_barras;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco_de_venda() {
        return $this->preco_de_venda;
    }

    public function getQuantidade_em_estoque() {
        return $this->quantidade_em_estoque;
    }

}

?>
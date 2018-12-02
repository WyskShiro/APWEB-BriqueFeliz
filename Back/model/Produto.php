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

    private $produto_id;
    private $nome;
    private $descricao;

    public function Produto($produto_id, $nome, $descricao) {
        $this->produto_id = $produto_id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getProdutoId() {
        return $this->produto_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

}

?>
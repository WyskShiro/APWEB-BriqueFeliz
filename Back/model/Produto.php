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
    private $codigoDeBarras;
    private $descricao;
    private $categoria_id;

    public function Produto($produto_id, $nome, $codigoDeBarras, $descricao, $categoria_id) {
        $this->produto_id = $produto_id;
        $this->nome = $nome;
        $this->codigoDeBarras = $codigoDeBarras;
        $this->descricao = $descricao;
        $this->categoria_id = $categoria_id;
    }

    public function getProdutoId() {
        return $this->produto_id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCodigoDeBarras() {
        return $this->codigoDeBarras;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }





}

?>
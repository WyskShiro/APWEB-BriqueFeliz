<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Fornecedor
 *
 * @author Murilo Rei Delas
 */
class Fornecedor {

    private $cnpj;
    private $nome_fantasia;
    private $razao_social;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;
    private $email;

    public function Fornecedor($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getNome_fantasia() {
        return $this->nome_fantasia;
    }

    public function getRazao_social() {
        return $this->razao_social;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

}

?>
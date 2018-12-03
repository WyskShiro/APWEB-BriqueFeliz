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

    private $fornecedor_id;
    private $cnpj;
    private $nome_fantasia;
    private $razao_social;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;
    private $email;

    public function Fornecedor($fornecedor_id, $cnpj, $nome_fantasia, $razao_social, $endereco, $cidade, $estado, $telefone, $email) {
        $this->fornecedor_id = $fornecedor_id;
        $this->cnpj = $cnpj;
        $this->nome_fantasia = $nome_fantasia;
        $this->razao_social = $razao_social;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function getFornecedorId() {
        return $this->fornecedor_id;
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
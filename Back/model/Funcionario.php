<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author Murilo Rei Delas
 */
class Funcionario {

    private $matricula;
    private $cpf;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone_residencial;
    private $telefone_celular;
    private $email;
    private $data_contratacao;
    
    public function Funcionario($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getNome() {
        return $this->nome;
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

    public function getTelefone_residencial() {
        return $this->telefone_residencial;
    }

    public function getTelefone_celular() {
        return $this->telefone_celular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDataContratacao() {
        return $this->dataContratacao;
    }


}

?>
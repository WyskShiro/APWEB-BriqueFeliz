<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author 201619060540
 */
class Cliente {

    private $cpf;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;
    private $email;

    public function Cliente($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
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

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

}

?>
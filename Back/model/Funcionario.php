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

    private $id;
    private $cpf;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefoneResidencial;
    private $telefoneCelular;
    private $email;
    private $dataContratacao;
    private $nivelPermissao; // 1 -> usuário normal, 2 -> admin


    public function __construct($id, $cpf, $nome, $endereco, $cidade, $estado, $telefoneResidencial, $telefoneCelular, $email, $dataContratacao, $nivelPermissao) {
        $this->id = $id;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->telefoneResidencial = $telefoneResidencial;
        $this->telefoneCelular = $telefoneCelular;
        $this->email = $email;
        $this->dataContratacao = $dataContratacao;
        $this->nivelPermissao = $nivelPermissao;
    }

    public function getId() {
        return $this->id;
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

    public function gettelefoneResidencial() {
        return $this->telefoneResidencial;
    }

    public function gettelefoneCelular() {
        return $this->telefoneCelular;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getDataContratacao() {
        return $this->dataContratacao;
    }

    public function getNivelPermissao() {

        return $this->nivelPermissao;
    }


}

?>
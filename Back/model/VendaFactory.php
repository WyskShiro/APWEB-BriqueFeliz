<?php

require_once("Venda.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VendaFactory
 *
 * @author Murilo Rei Delas
 */
class VendaFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM Venda where email = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM Venda";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listarVendasNaoConcluidas() {
        $sql = "SELECT * FROM Venda where concluida = 0";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $venda = $obj;
        try {
            $sql = "INSERT INTO  venda(valor_total, metodo_pagamento, desconto, cliente_id, funcionario_id, concluida)" .
                    "VALUES ( '" . $venda->getValorTotal() . "', '"
                    . $venda->getMetodoPagamento() . "', '"
                    . $venda->getDesconto() . "', '"
                    . $venda->getClienteId() . "', '"
                    . $venda->getFuncionarioId() . "', '"
                    . $venda->getConcluida() . "')";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

    public function deletar($param) {
        try {
            $sql = "DELETE FROM Venda where email= '" . $param . "'";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

    public function alterar($obj1,$venda_id) {
        try {
            $sql = "UPDATE venda set concluida =" . $obj1 . " where venda_id=". $venda_id.";";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

}

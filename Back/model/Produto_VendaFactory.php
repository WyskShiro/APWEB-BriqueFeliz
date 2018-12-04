<?php

require_once("Produto_venda.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto_vendaFactory
 *
 * @author Murilo Rei Delas
 */
class Produto_vendaFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM Produto_venda where email = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM produto_venda";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listarVenda($vendaId) {
        $sql = "SELECT * FROM produto_venda where venda_id =". $vendaId . ";";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_venda");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Produto_venda = $obj;
        try {
            $sql = "INSERT INTO  produto_venda(venda_id, produto_estoque_id, quantidade)" .
                    "VALUES ( '" . $Produto_venda->getVendaId() . "', '"
                    . $Produto_venda->getProdutoEstoqueId(). "', '"
                    . $Produto_venda->getQuantitade(). "')";
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
            $sql = "DELETE FROM produto_venda where produto_estoque = '" . $param . "'";
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

    public function alterar($obj1,$obj2,$email) {
        try {
            $sql = "UPDATE Produto_venda set nome ='" . $obj1 . "', email='" .$obj2 . "'where email='". $email."'";
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

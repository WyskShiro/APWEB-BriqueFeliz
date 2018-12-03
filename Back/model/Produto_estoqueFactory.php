<?php

require_once("Produto_estoque.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produto_estoqueFactory
 *
 * @author Murilo Rei Delas
 */
class Produto_estoqueFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM Produto_estoque where email = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_estoque");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM Produto_estoque";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_estoque");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Produto_estoque = $obj;
        try {
            $sql = "INSERT INTO  Produto_estoque(preco_compra, preco_venda, quantidade, fornecedor_id, produto_id)" .
                    "VALUES ( '" . 
                    $Produto_estoque->getPreco_compra() . "', '". 
                    $Produto_estoque->getPreco_venda() . "', '". 
                    $Produto_estoque->getQuantidade() . "', '". 
                    $Produto_estoque->getFornecedor_id() . "', '". 
                    $Produto_estoque->getProduto_id() . "')";
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
            $sql = "DELETE FROM Produto_estoque where email= '" . $param . "'";
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
            $sql = "UPDATE Produto_estoque set nome ='" . $obj1 . "', email='" .$obj2 . "'where email='". $email."'";
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
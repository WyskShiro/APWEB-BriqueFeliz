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
        $sql = "SELECT * FROM produto_estoque where produto_estoque_id = " . $param . ";";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Produto_estoque");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function buscarPorCodigo ($produtoCodigo){
        $sql = "SELECT produto_estoque.quantidade, produto_estoque.preco_venda , produto.nome FROM produto
        INNER JOIN produto_estoque ON (produto_estoque.produto_id = produto.produto_id) where produto.codigo_de_barras='".$produtoCodigo."'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToList($result,"produto");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM produto_estoque 
        INNER JOIN fornecedor ON (produto_estoque.fornecedor_id = fornecedor.fornecedor_id)
        INNER JOIN produto ON (produto_estoque.produto_id = produto.produto_id)";

        try {
            $result = $this->db->query($sql);
                //var_dump($result);
            $resultO = $this->queryRowsToList($result, "Produto_estoque");
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

    public function deletar($produto_estoque_id) {
        try {
            $sql = "DELETE FROM Produto_estoque where produto_estoque_id = '" . $produto_estoque_id . "'";
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

    public function alterarQuantidade($obj1,$produto_estoque_id){
        try {
            $sql = "UPDATE produto_estoque set quantidade =" . $obj1 . " where produto_estoque_id=". $produto_estoque_id.";";
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
<?php

require_once("Fornecedor.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FornecedorFactory
 *
 * @author Murilo Rei Delas
 */
class FornecedorFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM Fornecedor where email = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Fornecedor");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM Fornecedor";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Fornecedor");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Fornecedor = $obj;
        try {
            $sql = "INSERT INTO  Fornecedor(nome,email)" .
                    "VALUES ( '" . $Fornecedor->getNome() . "', '"
                    . $Fornecedor->getEmail() . "')";
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
            $sql = "DELETE FROM Fornecedor where email= '" . $param . "'";
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
            $sql = "UPDATE Fornecedor set nome ='" . $obj1 . "', email='" .$obj2 . "'where email='". $email."'";
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

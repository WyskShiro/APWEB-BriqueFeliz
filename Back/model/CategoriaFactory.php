<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 03/12/18
 * Time: 16:08
 */

require_once("Cliente.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteFactory
 *
 * @author Murilo Rei Delas
 */
class CategoriaFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM Categoria where categoria_id = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Cliente");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM Categoria";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Cliente");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Categoria = $obj;
        try {
            $sql = "INSERT INTO  Categoria(nome,descricao)" .
                "VALUES ( '" . $Categoria->getNome() . "', '"
                . $Categoria->getDescricao() . "')";
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
            $sql = "DELETE FROM Categoria where categoria_id = '" . $param . "'";
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

    public function alterar($obj1,$obj2,$categoria_id) {
        try {
            $sql = "UPDATE Cliente set nome ='" . $obj1 . "', descricao='" .$obj2 . "'where categoria_id ='". $categoria_id."'";
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

?>

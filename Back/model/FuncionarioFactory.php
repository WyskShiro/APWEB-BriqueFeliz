<?php

require_once("Funcionario.php");
require_once("AbstractFactory.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FuncionarioFactory
 *
 * @author Murilo Rei Delas
 */
class FuncionarioFactory extends AbstractFactory {

    //put your code here

    public function buscar($param) {
        $sql = "SELECT * FROM funcionario where funcionario_id = '" . $param . "'";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Funcionario");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function listar() {
        $sql = "SELECT * FROM funcionario";
        try {
            $result = $this->db->query($sql);

            $resultO = $this->queryRowsToListOfObjects($result, "Funcionario");
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $resultO = null;
        }
        return $resultO;
    }

    public function salvar($obj) {
        $Funcionario = $obj;
        try {
            $sql = "INSERT INTO  funcionario(nome,cpf,endereco,cidade,estado,telefone_residencial,telefone_celular,email,data_contratacao)" .
                    "VALUES ( '" . $Funcionario->getNome() . "', '"
                    . $Funcionario->getCpf() . "', '"
                    . $Funcionario->getEndereco() . "', '"
                    . $Funcionario->getCidade() . "', '"
                    . $Funcionario->getEstado() . "', '"
                    . $Funcionario->getTelefone_residencial() . "', '"
                    . $Funcionario->getTelefone_celular() . "', '"
                    . $Funcionario->getEmail()
                    . $Funcionario->getDataContratacao(). "')";
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
            $sql = "DELETE FROM Funcionario where funcionario_id = '" . $param . "'";
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
            $sql = "UPDATE Funcionario set nome ='" . $obj1 . "', email='" .$obj2 . "'where email='". $email."'";
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

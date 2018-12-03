<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 03/12/18
 * Time: 16:05
 * Description of Categoria
 *
 * @author Murilo Rei Delas
 */
class Categoria
{
    private $nome;
    private $descricao;

    public function Categoria($nome, $descricao)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

}
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
    private $categoria_id;
    private $nome;
    private $descricao;

    public function Categoria($categoria_id,$nome, $descricao)
    {
        $this->categoria_id = $categoria_id;
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

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: muril
 * Date: 03/12/18
 * Time: 23:26
 */

class ProdutosParaVenda
{
    private $produto_id;
    private $produto_estoque_id;
    private $nome;
    private $quantidade;
    private $preco;
    private $codigo_de_barras;

    /**
     * ProdutosParaVenda constructor.
     * @param $produto_id
     * @param $produto_estoque_id
     * @param $nome
     * @param $quantidade
     * @param $preco
     * @param $codigo_de_barras
     */
    public function ProdutosParaVenda($produto_id, $produto_estoque_id, $nome, $quantidade, $preco, $codigo_de_barras)
    {
        $this->produto_id = $produto_id;
        $this->produto_estoque_id = $produto_estoque_id;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->codigo_de_barras = $codigo_de_barras;
    }

    /**
     * @return mixed
     */
    public function getProdutoId()
    {
        return $this->produto_id;
    }

    /**
     * @return mixed
     */
    public function getProdutoEstoqueId()
    {
        return $this->produto_estoque_id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @return mixed
     */
    public function getCodigoDeBarras()
    {
        return $this->codigo_de_barras;
    }



}
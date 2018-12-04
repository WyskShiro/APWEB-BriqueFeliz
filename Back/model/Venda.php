<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Venda
 *
 * @author Murilo Rei Delas
 */
class Venda {

    private $venda_id;
    private $valor_total;
    private $metodo_pagamento;
    private $desconto;
    private $cliente_id;
    private $funcionario_id;
    private $concluida;

    /**
     * Venda constructor.
     * @param $venda_id
     * @param $valor_total
     * @param $metodo_pagamento
     * @param $desconto
     * @param $cliente_id
     * @param $funcionario_id
     * @param $concluida
     */
    public function Venda($venda_id, $valor_total, $metodo_pagamento, $desconto, $cliente_id, $funcionario_id, $concluida)
    {
        $this->venda_id = $venda_id;
        $this->valor_total = $valor_total;
        $this->metodo_pagamento = $metodo_pagamento;
        $this->desconto = $desconto;
        $this->cliente_id = $cliente_id;
        $this->funcionario_id = $funcionario_id;
        $this->concluida = $concluida;
    }

    /**
     * @return mixed
     */
    public function getVendaId()
    {
        return $this->venda_id;
    }

    /**
     * @return mixed
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    /**
     * @return mixed
     */
    public function getMetodoPagamento()
    {
        return $this->metodo_pagamento;
    }

    /**
     * @return mixed
     */
    public function getDesconto()
    {
        return $this->desconto;
    }

    /**
     * @return mixed
     */
    public function getClienteId()
    {
        return $this->cliente_id;
    }

    /**
     * @return mixed
     */
    public function getFuncionarioId()
    {
        return $this->funcionario_id;
    }

    /**
     * @return mixed
     */
    public function getConcluida()
    {
        return $this->concluida;
    }



}

?>
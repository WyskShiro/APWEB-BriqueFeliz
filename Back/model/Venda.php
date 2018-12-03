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

    private valor_total;
    private metodo_pagamento;
    private desconto;
    private cliente_id;
    private funcionario_id;


    public function Venda($metodo_pagamento, $desconto) {
        $this->metodo_pagamento = $metodo_pagamento;
        $this->desconto = $desconto;
    }

    public function getValor_total() {
        return $this->valor_total;
    }

    public function getMetodo_pagamento() {
        return $this->metodo_pagamento;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function getCliente_id() {
        return $this->cliente_id;
    }

    public function getFuncionario_id() {
        return $this->funcionario_id;
    }

}

?>
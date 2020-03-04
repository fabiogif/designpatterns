<?php

class Aprovado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento)
    {
        $valor = $orcamento->getValor();

        $orcamento->setValor($valor - $valor * 0.02);
    }
}

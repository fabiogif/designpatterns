<?php

class Reprovado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(Orcamento $orcamento)
    {
        throw new Exception("Orçamento Reprovado");
    }
}

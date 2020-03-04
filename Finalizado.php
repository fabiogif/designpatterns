<?php

class Finalizado implements EstadoDeUmOrcamento
{
    public function aplicaDescontoExtra(\Orcamento $orcamento)
    {
        throw new Exception("Orçamento Finalizado");
    }
}

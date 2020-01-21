<?php 

class ICMS {

    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.05;
    }
}
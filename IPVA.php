<?php 


class IPVA {


    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.6;
    }

}
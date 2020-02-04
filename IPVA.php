<?php 


class  IPVA extends Imposto {

    function __construct($imposto = null){
        parent::__construct($imposto);
    }
    
    public function calcula(Orcamento $Orcamento)
    {
        return $Orcamento->getValor() * 0.6 + $this->calculoOutroImposto($Orcamento);
    }

}
<?php 

class ISS extends TemplateDeImpostoCondicional {

    function __construct($imposto = null){
        parent::__construct($imposto);
    }
    
    public function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 300 + $this->calculoOutroImposto($Orcamento);
    }
    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.1 + $this->calculoOutroImposto($Orcamento);
    }
    public function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.15 + $this->calculoOutroImposto($Orcamento);
    }
}
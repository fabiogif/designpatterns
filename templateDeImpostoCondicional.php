<?php 
//Template Method
abstract class TemplateDeImpostoCondicional extends Imposto {

    function __construct($imposto = null){
        parent::__construct($imposto);
    }
    
    public final function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento) + $this->calculoOutroImposto($Orcamento);
        } else {
            return $this->taxacaoMinima($Orcamento) + $this->calculoOutroImposto($Orcamento);
        }
    }

    protected abstract function deveUsarMaximo(Orcamento $Orcamento);
    protected abstract function taxacaoMaxima(Orcamento $Orcamento);
    protected abstract function taxacaoMinima(Orcamento $Orcamento);

}
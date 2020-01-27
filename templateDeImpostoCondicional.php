<?php 
//Template Method
abstract class TemplateDeImpostoCondicional implements Imposto{

    public final function calcula(Orcamento $Orcamento)
    {
        if($this->deveUsarMaximo($Orcamento)){
            return $this->taxacaoMaxima($Orcamento);
        } else {
            return $this->taxacaoMinima($Orcamento);
        }
    }

    protected abstract function deveUsarMaximo(Orcamento $Orcamento);
    protected abstract function taxacaoMaxima(Orcamento $Orcamento);
    protected abstract function taxacaoMinima(Orcamento $Orcamento);

}
<?php 

class ICPP extends TemplateDeImpostoCondicional{

    protected function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500;
    }
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.7;
    }
    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05;
    }

}
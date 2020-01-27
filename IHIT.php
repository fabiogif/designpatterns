<?php 

class IHIT  extends TemplateDeImpostoCondicional {

    public function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getItens() == $Orcamento->getItens();
    }
    public function taxacaoMaxima(Orcamento $Orcamento){
        return ($Orcamento->getValor() * 0.13) + 100;
    }
    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.1;
    }

}
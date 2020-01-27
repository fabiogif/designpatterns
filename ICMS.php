<?php 
    //require_once 'templateDeImpostoCondicional.php';

class ICMS  extends TemplateDeImpostoCondicional{

    public function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500;
    }
    public function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.15;
    }
    public function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05;
    }
}
<?php 

class IKCV extends TemplateDeImpostoCondicional{
   
    function __construct($imposto = null){
        parent::__construct($imposto);
    }
    
    protected function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500 && $this->temItemMaiorQuer100Reais($Orcamento);
    }
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.10 + $this->calculoOutroImposto($Orcamento);
    }
    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.06 + $this->calculoOutroImposto($Orcamento);
    }

    private function temItemMaiorQuer100Reais(Orcamento $Orcamento)
    {
        foreach($Orcamento->getItens() as $item)
        {
            if($item->getValor() > 100) return true;
        }
        return false;
    }
    
}
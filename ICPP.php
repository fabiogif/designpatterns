 <?php 

class ICPP extends TemplateDeImpostoCondicional{
    
    function __construct($imposto = null){
        parent::__construct($imposto);
    }

    protected function deveUsarMaximo(Orcamento $Orcamento){
        return $Orcamento->getValor() > 500  + $this->calculoOutroImposto($Orcamento);
    }
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.7  + $this->calculoOutroImposto($Orcamento);
    }
    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.05  + $this->calculoOutroImposto($Orcamento);
    }

}
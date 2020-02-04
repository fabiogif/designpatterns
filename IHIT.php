<?php 

class IHIT  extends TemplateDeImpostoCondicional {

    public function deveUsarMaximo(Orcamento $Orcamento){
       
        $noOrcamento = Array();

        foreach($Orcamento->getItens() as $item)
        {
            if(in_array($item->getNome(), $noOrcamento)){
                return true;
            } else {
                $noOrcamento[] = $item->getNome();
            }
                return false;
        }
    }
    protected function taxacaoMaxima(Orcamento $Orcamento){
        return $Orcamento->getValor() * 0.13 + 100 + $this->calculoOutroImposto($Orcamento);
    }
    protected function taxacaoMinima(Orcamento $Orcamento){
        return $Orcamento->getValor() * (0.1 * count($Orcamento->getItens) + $this->calculoOutroImposto($Orcamento));
    }

}
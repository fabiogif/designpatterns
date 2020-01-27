<?php

require_once 'DescontosCincoItens.php';
require_once 'DescontoQuinhentosReais.php'; 
require_once 'semDesconto.php';
require_once 'DescontoMilReais.php';

class calculadoraDeDesconto{

    public function desconto(Orcamento $Orcamento)
    {
        $descontoCincoItens = new DescontosCincoItens();
        $descontoQuinhentosReais = new DescontoQuinhentosReais();
        $descontoMilReais = new DescontoMilReais();

        $semDesconto = new SemDesconto();

        $descontoCincoItens->setProximo($descontoQuinhentosReais);
        $descontoQuinhentosReais->setProximo($descontoMilReais);

        $descontoMilReais->setProximo($semDesconto);

        $valorDoDesconto = $descontoCincoItens->desconto($Orcamento);

        return $valorDoDesconto;

        
    }
}
<?php 
require_once "Desconto.php";

class DescontoMilReais  implements Desconto{

    private $proximoDesconto;
    
    public function desconto(Orcamento $Orcamento)
    {
        if($Orcamento->getValor() > 1000)
        {
            return $Orcamento->getValor() * 0.10;
        } else {
            return  $this->proximoDesconto->desconto($Orcamento);
        }   
    }

    public function setProximo(Desconto $proximo)
    {
        $this->proximoDesconto =$proximo;

    }
    

}
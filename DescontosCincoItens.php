<?php 

 class DescontosCincoItens implements Desconto{
    
    private $proximoDesconto;

     public function desconto(Orcamento $Orcamento)
     {
         
         if(count($Orcamento->getItens()) > 5)
         {
             return $Orcamento->getValor() * 0.10;
         } else {
            // return 0;
           return $this->proximoDesconto->desconto($Orcamento);
         }
     }

    public function setProximo(Desconto $proximo)
     {
        $this->proximoDesconto = $proximo;
     }
 }
?>
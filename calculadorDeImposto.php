<?php

class calculadorDeImposto {


    public function calcula(Orcamento $Orcamento, $imposto)
    {
        return $imposto->calcula($Orcamento);
    }
 

}
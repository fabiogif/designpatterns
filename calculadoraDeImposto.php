<?php

class calculadoraDeImposto {


    public function calcula(Orcamento $Orcamento, $imposto)
    {
        return $imposto->calcula($Orcamento);
    }
 

}
<?php 

require_once "Desconto.php";

    class SemDesconto implements Desconto{

        public function desconto(Orcamento $Orcamento)
        {
            return 0;
        }

        public function setProximo(Desconto $proximo)
        {
            //Sem retorno
        }
    }
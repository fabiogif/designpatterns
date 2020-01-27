<?php 

class RelatorioSimples extends Relatorio {

    protected function cabecalho()
    {
        echo "Banco Inter";
    }

    protected function corpo($contas)
    {
        foreach($contas as $conta)
        {
            echo $conta->getNome(). " - " . $conta->getSaldo();
        }
    }
    protected function rodape()
    {
        echo "(71) 9919-1871";
    }
    
}
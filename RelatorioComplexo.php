<?php 

class RelatorioComplexo extends Relatorio {
    protected function cabecalho()
    {
        echo 'Banco Inter - C';
    }

    protected function corpo($contas)
    {
       foreach($contas as $conta)
       {
           echo $conta->getNome(). ' - ' .$conta->getNumero() . ' - ' .$conta->getAgencia(). ' - ' . $conta->getSaldo();
       }
    }

    protected function rodape()
    {
        echo "(71) 991981871";
        echo "bancoInter@inter.com.br";
        echo date('d/m/Y');
    }

}
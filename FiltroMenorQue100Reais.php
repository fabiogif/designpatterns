<?php

class FiltroMenorQue100Reais extends Filtro
{

    function __construct($outroFiltro = null)
    {
        parent::__construct($outroFiltro);
    }

    public function filtrar($contas)
    {
        $filtrada = [];

        foreach ($contas as $conta) {
            if ($conta->getValor() < 100) {
                $filtrada[] = $conta;
            }
        }

        foreach ($this->proximo($contas) as $conta) {
            $filtrada[] = $conta;
        }

        return $filtrada;
    }
}

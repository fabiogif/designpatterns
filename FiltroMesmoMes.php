<?php


class FiltroMesmoMes extends Filtro
{

    function __construct($outroFiltro = null)
    {
        parent::__construct($outroFiltro);
    }

    public function filtrar($contas)
    {
        $filtrada = array();

        foreach ($contas as $conta) {
            if ($conta->getDataAbertura()->get("month") == date("m") && $conta->getDataAbertura()->get("year") == date("Y")) {
                $filtrada[] = $conta;
            }
        }

        foreach ($this->proximo($contas) as $conta) {
            $filtrada[] = $conta;
        }

        return $filtrada;
    }
}

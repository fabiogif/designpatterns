<?php

abstract class Filtro
{

    protected $outroFiltro;

    function __construct($outroFiltro = null)
    {
        $this->outroFiltro = $outroFiltro;
    }

    abstract public function filtrar($contas);

    protected function proximo($contas)
    {
        if (!is_null($this->outroFiltro)) {
            return $outroFiltro->filtrar($contas);
        } else {
            return array();
        }
    }
}

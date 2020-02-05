<?php

abstract class Imposto
{

  protected $outroImposto;

  function __construct($imposto = null)
  {
    $this->outroImposto = $imposto;
  }

  public function calculoOutroImposto(Orcamento $Orcamento)
  {
    return ($this->outroImposto == null ? 0 : $this->outroImposto->calcula($Orcamento));
  }
  public abstract function calcula(Orcamento $Orcamento);
}

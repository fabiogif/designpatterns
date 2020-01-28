<?php

class DescontoPorVendaCasada implements Desconto {

private $proximo;

public function desconto(Orcamento $orcamento)
{
    if($this->aconteceuVendaCasada($orcamento))
    {
        return $orcamento->getValor() * 0.05;
    } else {
        return $this->proximo->desconto($orcamento);
    }
}

public function aconteceuVendaCasada(Orcamento $orcamento)
{
    return $this->existe('Caneca', $orcamento) && $this->existe('Lapis', $orcamento);
}


public function existe($nomeDoItem, Orcamento $orcamento)
{
    foreach($orcamento->getItens() as $item)
    {
        if($item->getNome() == $nomeDoItem) return true;
    }
    return false;
}


public function setProximo(Desconto $proximo)
{
    $this->proximo = $proximo;
}

}
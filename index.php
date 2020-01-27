<?php

require "Orcamento.php";
//Descontos 
require "Desconto.php";
require_once "DescontosCincoItens.php";

require "DescontoQuinhentosReais.php";
require "DescontoMilReais.php";
require "semDesconto.php";

require "item.php";
require "calculadoraDeImposto.php";
require "calculadoraDeDesconto.php";

//Impostos  
require  "ISS.php";
require "ICMS.php";
require "IPVA.php";

$reforma = new Orcamento(100);

$calculadora = new calculadoraDeImposto();

echo $calculadora->calcula($reforma, new ICMS());

echo '</br>';

echo $calculadora->calcula($reforma, new ISS());

echo '</br>';

echo $calculadora->calcula($reforma, new IPVA());

//Chain Of Responsibility
echo '</br> Testes de Descontos </br>';

    $calculadoraDeDescontos = new calculadoraDeDesconto();

    echo "Desconto: ";
    $reforma->addItem(new Item("Tijolo", 250));
    $reforma->addItem(new Item("Arenoso", 250));
    $reforma->addItem(new Item("Arenoso", 250));

        
    echo $calculadoraDeDescontos->desconto($reforma);

?>
<?php

require "Orcamento.php";
require "calculadorDeImposto.php";

//Impostos 
require  "ISS.php";
require "ICMS.php";
require "IPVA.php";

$reforma = new Orcamento(500);

$calculadora = new calculadorDeImposto();


echo $calculadora->calcula($reforma, new ICMS());

echo '</br>';

echo $calculadora->calcula($reforma, new ISS());

echo '</br>';

echo $calculadora->calcula($reforma, new IPVA());

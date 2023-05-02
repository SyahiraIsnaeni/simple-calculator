<?php

require_once "../BusinessLogic/ScientificCalculator.php";
require_once "../BusinessLogic/Calculator.php";

$scientificCalculator = new ScientificCalculator();
$scientificCalculator->addNumber(2);
$scientificCalculator->addNumber(4);
$scientificCalculator->addNumber(25);

$result = $scientificCalculator->squareRoot($scientificCalculator->getNumber(2));
echo $result . PHP_EOL;

$result = $scientificCalculator->exponentiation($scientificCalculator->getNumber(0), $scientificCalculator->getNumber(1));
echo $result . PHP_EOL;

$result = $scientificCalculator->factorial($scientificCalculator->getNumber(1));
echo $result . PHP_EOL;

$scientificCalculator->clear();

$scientificCalculator  = new ScientificCalculator();
$scientificCalculator->addNumber(2);
$scientificCalculator->addNumber(2);
$scientificCalculator->addNumber(3);

$result = $scientificCalculator->squareRoot($scientificCalculator->getNumber(2));
echo $result . PHP_EOL;

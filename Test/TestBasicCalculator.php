<?php

require_once "../BusinessLogic/BasicCalculator.php";
require_once "../BusinessLogic/Calculator.php";

$basicCalculator = new BasicCalculator();

$basicCalculator->addNumber(2);
$basicCalculator->addNumber(2);
$basicCalculator->addNumber(3);
echo implode("", $basicCalculator->getAllNumber()) . PHP_EOL;

$result = $basicCalculator->add($basicCalculator->getNumber(0), $basicCalculator->getNumber(1), $basicCalculator->getNumber(2));
echo $result . PHP_EOL;

$result = $basicCalculator->substract($basicCalculator->getNumber(0), $basicCalculator->getNumber(1), $basicCalculator->getNumber(2));
echo $result . PHP_EOL;

$result = $basicCalculator->multiply($basicCalculator->getNumber(0), $basicCalculator->getNumber(1), $basicCalculator->getNumber(2));
echo $result . PHP_EOL;

$result = $basicCalculator->divide($basicCalculator->getNumber(0), $basicCalculator->getNumber(1), $basicCalculator->getNumber(2));
echo $result . PHP_EOL;

$basicCalculator->clear();

$basicCalculator = new BasicCalculator();
$basicCalculator->addNumber(2);
$basicCalculator->addNumber(2);
$basicCalculator->addNumber(3);

$result = $basicCalculator->add($basicCalculator->getNumber(0), $basicCalculator->getNumber(1), $basicCalculator->getNumber(2));
echo $result . PHP_EOL;

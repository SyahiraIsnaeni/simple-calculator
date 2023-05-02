<?php

require_once "Calculator.php";

class ScientificCalculator extends Calculator{

    public function squareRoot($number){
        $result = sqrt($number);
        return $result;
    }

    public function exponentiation($base, $exponent){
        $result = pow($base, $exponent);
        return $result;
    }

    public function factorial($number){
        $result = 1;
        for($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
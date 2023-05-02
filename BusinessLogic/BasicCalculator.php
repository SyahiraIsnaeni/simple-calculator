<?php

require_once "Calculator.php";

class BasicCalculator extends Calculator {

    public function add(...$values){
        $result = 0;
        for ($i = 0; $i < sizeof($values); $i++){
           $result += $values[$i];
        }
        return $result;
    }

    public function substract(...$values){
        $result = 0;
        for ($i = 1; $i < sizeof($values); $i++){
            $result += $values[$i];
        }
        $result = $values[0] - $result;
        return $result;
    }

    public function multiply(...$values){
        $result = 1;
        for ($i = 0; $i < sizeof($values); $i++){
            $result *= $values[$i];
        }
        return $result;
    }

    public function divide(...$values){
        $result = 1;
        for ($i = 1; $i < sizeof($values); $i++){
            if ($values[$i] != 0){
                $result *= $values[$i];
            }else{
                echo "Cannot divided by zero" . PHP_EOL;
                return 0;
            }
        }
        $result = $values[0] / $result;
        return $result;
    }

}
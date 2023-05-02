<?php

require_once "../BusinessLogic/Calculator.php";
require_once "../BusinessLogic/BasicCalculator.php";
require_once "../BusinessLogic/ScientificCalculator.php";
require_once "../Helper/Input.php";

while (true){
    echo "*** CALCULATOR ***" . PHP_EOL;
    echo "1. Basic Calculator" . PHP_EOL;
    echo "2. Scientific Calculator" . PHP_EOL;

    $calculator = input("Choose calculator (x for exit)");

    if ($calculator == "x"){
        echo "Thank you for using this app!" . PHP_EOL;
        break;
    }elseif($calculator == "1"){
        echo "Basic Calculator" . PHP_EOL;
        echo "1. Addition" . PHP_EOL;
        echo "2. Substraction" . PHP_EOL;
        echo "3. Multiplication" . PHP_EOL;
        echo "4. Division" . PHP_EOL;
        $basic = input("Choose Arithmatic Operation (x for cancel)");
        if ($basic == "x"){
            //cancel
        }elseif ($basic == "1"){
            $basicCalculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $basicCalculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $basicCalculator->sizeNumber(); $j++){
                if ($j == $basicCalculator->sizeNumber() - 1){
                    $temp = "{$basicCalculator->getNumber($j)}";
                }else{
                    $temp = "{$basicCalculator->getNumber($j)} + ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $basicCalculator->add(...$basicCalculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $basicCalculator->clear();
        }elseif ($basic == "2"){
            $basicCalculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $basicCalculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $basicCalculator->sizeNumber(); $j++){
                if ($j == $basicCalculator->sizeNumber() - 1){
                    $temp = "{$basicCalculator->getNumber($j)}";
                }else{
                    $temp = "{$basicCalculator->getNumber($j)} - ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $basicCalculator->substract(...$basicCalculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $basicCalculator->clear();
        }elseif ($basic == "3"){
            $basicCalculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $basicCalculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $basicCalculator->sizeNumber(); $j++){
                if ($j == $basicCalculator->sizeNumber() - 1){
                    $temp = "{$basicCalculator->getNumber($j)}";
                }else{
                    $temp = "{$basicCalculator->getNumber($j)} * ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $basicCalculator->multiply(...$basicCalculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $basicCalculator->clear();
        }elseif ($basic == "4"){
            $basicCalculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $basicCalculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $basicCalculator->sizeNumber(); $j++){
                if ($j == $basicCalculator->sizeNumber() - 1){
                    $temp = "{$basicCalculator->getNumber($j)}";
                }else{
                    $temp = "{$basicCalculator->getNumber($j)} : ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $basicCalculator->divide(...$basicCalculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $basicCalculator->clear();
        }else{
            echo "Can't understand the request" . PHP_EOL;
        }
    }elseif ($calculator == "2"){
        echo "Scientific Calculator" . PHP_EOL;
        echo "1. Square Root" . PHP_EOL;
        echo "2. Exponentiation" . PHP_EOL;
        echo "3. Factorial" . PHP_EOL;
        $scientific = input("Choose Scientific Operation (x for cancel)");
        if ($scientific == "x"){
            //cancel
        }elseif ($scientific == "1"){
            $scientificCalculator = new ScientificCalculator();
            $number = input("Input number (x for cancel)");
            if ($number == "x"){
                //cancel
            }else{
                $scientificCalculator->addNumber($number);
                echo "√{$scientificCalculator->getNumber(0)}" . PHP_EOL;
                $result = $scientificCalculator->squareRoot($scientificCalculator->getNumber(0));
                echo "Result = " . $result . PHP_EOL . PHP_EOL;
            }
            $scientificCalculator->clear();
        }elseif ($scientific == "2"){
            $scientificCalculator = new ScientificCalculator();
            $baseNumber = input("Input base number (x for cancel)");

            if ($baseNumber == "x"){
                //cancel
            }else{
                $exponentNumber = input("Input exponent number (x for cancel)");
                if($exponentNumber == "x"){
                    //cancel
                }else{
                    $scientificCalculator->addNumber($baseNumber);
                    $scientificCalculator->addNumber($exponentNumber);
                    echo "{$scientificCalculator->getNumber(0)}^{$scientificCalculator->getNumber(1)}";
                    $result = $scientificCalculator->exponentiation($scientificCalculator->getNumber(0), $scientificCalculator->getNumber(1));
                    echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
                }
            }
            $scientificCalculator->clear();
        }elseif ($scientific == "3"){
            $scientificCalculator = new ScientificCalculator();
            $number = input("Input number (x for finish)");
            if ($number == "x"){
                //cancel
            }else{
                $scientificCalculator->addNumber($number);
                echo "{$scientificCalculator->getNumber(0)}!";
                $result = $scientificCalculator->factorial($scientificCalculator->getNumber(0));
                echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            }
            $scientificCalculator->clear();
        }else{
            echo "Can't understand the request" . PHP_EOL;
        }
    }else{
        echo "Can't understand the request" . PHP_EOL;
    }
}

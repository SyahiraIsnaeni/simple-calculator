<?php

require_once "../BusinessLogic/Calculator.php";
require_once "../BusinessLogic/BasicCalculator.php";
require_once "../BusinessLogic/ScientificCalculator.php";
require_once "../Helper/Input.php";

while (true){
    echo "*** CALCULATOR ***" . PHP_EOL;
    echo "1. Basic Calculator" . PHP_EOL;
    echo "2. Scientific Calculator" . PHP_EOL;

    $typeCalculator = input("Choose calculator (x for exit)");

    if ($typeCalculator == "x"){
        echo "Thank you for using this app!" . PHP_EOL;
        break;
    }elseif($typeCalculator == "1"){
        echo "Basic Calculator" . PHP_EOL;
        echo "1. Addition" . PHP_EOL;
        echo "2. Substraction" . PHP_EOL;
        echo "3. Multiplication" . PHP_EOL;
        echo "4. Division" . PHP_EOL;
        $basic = input("Choose Arithmatic Operation (x for cancel)");
        if ($basic == "x"){
            //cancel
        }elseif ($basic == "1"){
            $calculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $calculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $calculator->sizeNumber(); $j++){
                if ($j == $calculator->sizeNumber() - 1){
                    $temp = "{$calculator->getNumber($j)}";
                }else{
                    $temp = "{$calculator->getNumber($j)} + ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $calculator->add(...$calculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $calculator->clear();
        }elseif ($basic == "2"){
            $calculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $calculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $calculator->sizeNumber(); $j++){
                if ($j == $calculator->sizeNumber() - 1){
                    $temp = "{$calculator->getNumber($j)}";
                }else{
                    $temp = "{$calculator->getNumber($j)} - ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $calculator->substract(...$calculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $calculator->clear();
        }elseif ($basic == "3"){
            $calculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $calculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $calculator->sizeNumber(); $j++){
                if ($j == $calculator->sizeNumber() - 1){
                    $temp = "{$calculator->getNumber($j)}";
                }else{
                    $temp = "{$calculator->getNumber($j)} * ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $calculator->multiply(...$calculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $calculator->clear();
        }elseif ($basic == "4"){
            $calculator = new BasicCalculator();
            while (true){
                $number = input("Input number (x for finish)");
                if ($number == "x"){
                    break;
                }else{
                    $calculator->addNumber($number);
                }
            }
            $calculation = "";
            $result = 0;
            for ($j = 0; $j < $calculator->sizeNumber(); $j++){
                if ($j == $calculator->sizeNumber() - 1){
                    $temp = "{$calculator->getNumber($j)}";
                }else{
                    $temp = "{$calculator->getNumber($j)} : ";
                }
                $calculation = $temp;
                echo $calculation;
                $result = $calculator->divide(...$calculator->getAllNumber());
            }
            echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            $calculator->clear();
        }else{
            echo "Can't understand the request" . PHP_EOL;
        }
    }elseif ($typeCalculator == "2"){
        echo "Scientific Calculator" . PHP_EOL;
        echo "1. Square Root" . PHP_EOL;
        echo "2. Exponentiation" . PHP_EOL;
        echo "3. Factorial" . PHP_EOL;
        $scientific = input("Choose Scientific Operation (x for cancel)");
        if ($scientific == "x"){
            //cancel
        }elseif ($scientific == "1"){
            $calculator = new ScientificCalculator();
            $number = input("Input number (x for cancel)");
            if ($number == "x"){
                //cancel
            }else{
                $calculator->addNumber($number);
                echo "√{$calculator->getNumber(0)}" . PHP_EOL;
                $result = $calculator->squareRoot($calculator->getNumber(0));
                echo "Result = " . $result . PHP_EOL . PHP_EOL;
            }
            $calculator->clear();
        }elseif ($scientific == "2"){
            $calculator = new ScientificCalculator();
            $baseNumber = input("Input base number (x for cancel)");

            if ($baseNumber == "x"){
                //cancel
            }else{
                $exponentNumber = input("Input exponent number (x for cancel)");
                if($exponentNumber == "x"){
                    //cancel
                }else{
                    $calculator->addNumber($baseNumber);
                    $calculator->addNumber($exponentNumber);
                    echo "{$calculator->getNumber(0)}^{$calculator->getNumber(1)}";
                    $result = $calculator->exponentiation($calculator->getNumber(0), $calculator->getNumber(1));
                    echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
                }
            }
            $calculator->clear();
        }elseif ($scientific == "3"){
            $calculator = new ScientificCalculator();
            $number = input("Input number (x for finish)");
            if ($number == "x"){
                //cancel
            }else{
                $calculator->addNumber($number);
                echo "{$calculator->getNumber(0)}!";
                $result = $calculator->factorial($calculator->getNumber(0));
                echo "\nResult = " . $result . PHP_EOL . PHP_EOL;
            }
            $calculator->clear();
        }else{
            echo "Can't understand the request" . PHP_EOL;
        }
    }else{
        echo "Can't understand the request" . PHP_EOL;
    }
}

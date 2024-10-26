<?php 
function scope(){
    $value = 1;
    $newValue = 2;

    $checkCope = function($anotherValue) use(&$value, $newValue){
        echo $value;
        echo PHP_EOL;
        echo $newValue;

        echo PHP_EOL;
        echo $anotherValue;

        $value = 10;
    };

    $checkCope(30);
    echo PHP_EOL;
    echo $value;
}

scope();


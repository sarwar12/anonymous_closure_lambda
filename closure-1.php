<?php
//Naming Funciton
function greet($name){
    echo "Hello {$name}";
}
greet("World\n");

//Anonymous Function
$greeter = function($name){
    echo "Hello {$name}";
};
$greeter("World");

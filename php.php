<?php
function myFunction() {
    static $x = 0;
    echo $x. '<br>';
    $x++;
}

myFunction();
myFunction();   
myFunction();   

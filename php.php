<?php
$x = 5;
$y = 10;

function myFunction() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];  
}

myFunction();
echo $y;

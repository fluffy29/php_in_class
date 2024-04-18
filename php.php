<?php
$x = 7;

function myFunction() {
    global $x;
    $x = 10;
}
myFunction();
echo $x;

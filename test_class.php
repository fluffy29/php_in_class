<?php 
require_once 'Rectangle.php';

$rec = new Rectangle(5, 3);

echo $rec->calculateArea();
echo'<br>';
echo $rec->calculatePerimeter();
echo '<br>';
?>
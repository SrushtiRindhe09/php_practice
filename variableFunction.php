<?php 
$a="10.13";
echo("before Converting <br>");
var_dump($a);
$b=number_format($a,2);
echo(" <br> after Converting <br>");
var_dump((double)$b);

?>
<?php
function addFunction($num1, $num2) {
$sum = $num1 + $num2;
return $sum;
}
$return_value = addFunction(10, 20);
echo "Returned value from the function  : $return_value <br>";
function subFunction($num1, $num2) {
$sub = $num1 - $num2;
return $sub;
}
$return_value1 = subFunction(10, 20);
echo "Returned value from the function : $return_value1";
?>
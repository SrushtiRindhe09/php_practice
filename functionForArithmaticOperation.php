<?php

function arithmetic_operations($num1,$num2) //DEFINE function
{
	$sum = $num1 + $num2; //Addition
	
	$prod = $num1 * $num2; //Subtraction
	
	$sub = $num1 - $num2; //Multipliocation
	
	$div = $num1 / $num2; //Division

	return array($sum,$sub,$prod,$div); //Returing Array
}

echo "Calling Array: ";
print "<BR>";
$result = arithmetic_operations(10,2); //function call
.
print "<BR>";

echo "Printing returned Array: ";
print "<BR>";
print "Sequence: Addition,Subtraction,Multiplication,Divison";
print "<BR>";

foreach ($result as $i)
{
	echo "$i";
	print "<BR>";

} 	




?>
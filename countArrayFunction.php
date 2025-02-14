<?php

$course=array("CO","IF","EJ","ME","CE");
echo"Looping using foreach:<br>";
foreach($course as $val)
{
	echo $val."<br>";
}
$total=count($course);
echo"<br> The number of elements are $total<br>";


?>
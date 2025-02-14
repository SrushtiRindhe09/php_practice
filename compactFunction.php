<?php

$v1 = "PHP";
$v2 = "JAVA";

$v3 = compact("v1","v2");
print_r($v3);echo "<br>";


foreach ($v3 as $i)
{
	echo "$i <br>";
}


?>
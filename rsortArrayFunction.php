<?php

$arr1=array(7,8,2,7,6);
echo"Before sorting array<br>";
foreach($arr1 as $val)
{
	echo $val."<br>";
}
rsort($arr1);
echo"<br>After sorting array<br>";
foreach($arr1 as $val)
{
	echo $val."<br>";
}

?>
<?php

$course[0]="Computer Engg.";
$course[1]="Information Tech.";
echo"Before modifying Array<br>";
foreach ($course as $val)
{
	echo $val."<br>";
}
$course[0]="Mechanical Engg.";
$course[1]="Civil Engg.";
echo"<br>after modifying Array<br>";
foreach ($course as $val)
{
	echo $val."<br>";
}
?>
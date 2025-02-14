<html>
<head>
<title>Dleting array element</title>
</head>
<body>
<input type="text">
</body>
</html>
<?php

$course=array("CO","IF","EJ","ME");
echo"Before deleting array<br>";
foreach($course as $val)
{
	echo $val."<br>";
}
unset($course[3]);
echo"<br>After deleting array element<br>";
foreach($course as $val)
{
	echo $val."<br>";
}

?>
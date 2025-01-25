<?php
$student=array
(
    array("XYZ",3401,86.45),
    array("PQR",3402,85.42),
    array("ABC",3403,87.41),
);
for($row=0;$row<3;$row++)
{
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for($col=0;$col<3;$col++)
    {
        echo "<li>".$student[$row][$col]."</li>";

    }
    echo "<ul>";
    
}
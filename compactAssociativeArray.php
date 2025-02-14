<?php
$firstname= "yahho";
$lastname= "baba";
$age="20";
//associative array convert
$newArray=compact("firstname","lastname","age");//doller sign not used,compact create associative array

echo"<pre>";

print_r($newArray);//newArray value stored array

echo"</pre>";
?>


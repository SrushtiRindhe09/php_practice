<?php
$firstname= "yahho";
$lastname= "baba";
$age="20";
$gender="female";
$country="india";
$gmail="abc@gmail.com";
$adress="ghulewadi";


$extra=["gender","country","gmail","adress"];
//associative array convert
$newArray=compact("firstname","lastname","age",$extra);//doller sign not used,compact create associative array

echo"<pre>";

print_r($newArray);//newArray value stored array

echo"</pre>";
?>
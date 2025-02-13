<?php 

$a = "hello world"; //total char, 11 strlen provide the length
//strlen(string)
echo strlen($a);
echo "<br>";

//$a = "Hello World";  // word count then used str_word_count
//str_word_count(string ,return)
echo str_word_count($a);
$array = str_word_count($a,1);
echo "<pre>";
print_r($array);
echo "</pre>";



$b = "Hello world. The world is nice";
//substr_count(string ,substring,start,length) this is case sencitive 

echo substr_count($b ,"world"); // word 2 count

echo "<br>";

echo substr_count($b ,"world",10.15); //10 position 15 position 
?>
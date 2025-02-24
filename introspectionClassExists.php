<?php
//Introspection Functions
//class_exists()
//get_class()


class vesp
{
function a()
{
echo "hey IF6I";
} 
}
if(class_exists('vesp'))
{
$ob=new vesp();
echo "This is ves.ac.in";
echo "<br>";
echo $ob->a();
}
else
{
echo "Not exist";
}
?>
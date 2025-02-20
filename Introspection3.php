<?php
class Introspection
{
function description()
{
echo "Im super class for the child class<br>";
} 
}
if(class_exists('Introspection'))
{
$ob=new Introspection();
echo "This class name is ".get_class($ob). "</br>";
$ob->description();
}
//get_parent_class()

class Child extends Introspection
{
    public function description()
    {
        echo "I am " .get_class($this)."  class and<br>";
        echo "I am ".get_parent_class($this). "  child <br>";
    }
}

if(class_exists("Child"))
{
    $child=new Child();
    $child->description();
}
if(is_subclass_of($child,"Introspection"))
{
    echo "Yes ," .get_class($child)."  is a subclass of introspection<br>";
}
else{
    echo "No ," .get_class($child)."   is a subclass of introspection<br>"; 
}
?>
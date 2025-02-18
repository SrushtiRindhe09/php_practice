<?php

/*What is Destructor in PHP?

If you create a destruct() function, PHP will automatically call this function at the end of the script.

Notice that the destruct function starts with two underscores ()!

construct() function that is automatically called when you create an object from a class, and a_destruct() function that is automatically called at the end of the script
The destructor method will be called as soon as all references to a particular object are removed or when the object is explicitly destroyed in any order in shutdown sequence.
We create destructor by using "__destruct" function.*/


class Channel{
public $name;
function __construct(){
    echo"Please Write";
echo"<br>";
    }



function get_name($name)
{
return $name;

}
function __destruct(){
    echo"With Output";

    }

}

$obj1= new Channel();


echo $obj1->get_name('Php Program');

?>
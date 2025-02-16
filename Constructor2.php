<?php

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
   
    }
    
    $obj1= new Channel();
    
    
    echo $obj1->get_name('Php Program');
    
    
?>


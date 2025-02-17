<?php 


abstract class a
{
	abstract function disp1();  //Declaring an abstract method
}

class b extends a
{	
	function disp1()
	{
		print "Defined abstract class's method";
	}
}


$temp = new b();
$temp->disp1();


?>
<?php

class A{

	final public function display(){
		echo "In Parent Class";
	}
}

class B extends A{

	public function display(){
		echo "In Child Class";
	}
}

$b=new B();
$b->display(); 	
?>
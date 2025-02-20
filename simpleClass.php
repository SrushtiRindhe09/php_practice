<?php
class example
{
  public $name;
  function setname($name)
  {
	$this->name=$name;
  }
  function getname()
  {
	return $this->name;
  }
}
$obj=new example();
$obj->setname("xyz");
echo $obj->getname();
?>
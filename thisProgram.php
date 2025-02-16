<?php

//the $this keyword points to the current object.You use $this followed by the -> operator.In addition ,you omit the $in fornt of the property
//EX.  $this->model

class Mobile
{
public $model;
function showModel()
{

     echo $this->model; // current object to call
}
}
$samsung = new Mobile;
$samsung->model= "A8+";
$samsung->showModel();
?>
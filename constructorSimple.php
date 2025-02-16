<?php


/*------------------------ Constructor------------------------*/
//constructor is a function call by object
//initialize by object then call the constructor
//If you create a __construct function ,php will automatically call this function when you create  an object from a classwith two underscores
//Notice that the construct function starts two underscores(__).
//You can ay that the constructor are the blueprint for the object creation.
//Constructor is suitable for any initialization that the object may need before it is used.
//We can design constructor using "__construct" or same name as class name.


class employee{
public $name;
public $age;
public $salary;
function  __construct($name,$age, $salary=0){
$this->name = $name;
$this->age = $age;
$this->salary = $salary;

//echo "hi constructor";
}
function work(){
echo $this->name."  is working.His age is." .$this->age.'.and monthly earing is: '.$this->salary;
}

}
$emp1 = new employee("Tanvi",20,40000);


$emp2 = new employee("Tanu",25);

//$emp2 = new employee("Tanu",25,20000);
$emp1->work();
echo"<br>";
$emp2->work();
echo"<br>";
echo json_encode($emp1);//json_encode is used to encode a value to Json Format
echo "<br>";
echo json_encode($emp2);


?>
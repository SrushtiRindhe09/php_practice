<?php
class car {
public $name;
public $color;
public function __construct($name, $color) {
$this->name = $name;
$this->color = $color;
}
public function intro() {
echo "The car is {$this->name} and the color is {$this->color}.<br>";
}
/*protected function print(){
echo "Tata motor also famous in World";
}*/
}
class maruti extends car {
public function message() {
echo " Maruti in an Indian company of car<br>";
}
}
$d = new maruti("swift dzire", "red");
$d->message();
$d->intro();
//$d->print();
?>

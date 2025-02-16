<?php
class Person {
// first name of person
private $fname;

// last name of person
private $lname;
// Constructor
public function __construct($fname, $lname) {
echo "Initialising the object...<br/>";
$this->fname = $fname;
$this->lname = $lname;
}
// public method to show name
public function showName() {
echo "The Legend of India: " . $this->fname . " " . $this->lname;
}
}
// creating class object
$j = new Person("Bhagat", "Singh");
$j->showName();
?>
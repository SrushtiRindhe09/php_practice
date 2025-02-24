<?php
class Student
{
  function getdata($nm,$rn)
   {
     $this->name=$nm;
     $this->rollno=$rn;
   }
  function display()
  {
    echo "<br>Name=".$this->name;
    echo "<br>Rollno=".$this->rollno;
  }
}
$s1=new Student();
$s1->getdata("Srushti",128);
$s1->display();
$s2=clone $s1;
echo "<br>Cloned Object Data";
$s2->display();
?>
     
<?php
interface Animal
{
  public function makesound();
}
class Cat implements Animal
{
 public funtion makesound()
  {
    echo "Meow";
  }
}
class Dog implements Animal
{
 public funtion makesound()
  {
    echo "Bark";
  }
}
class Mouse implements Animal
{
 public funtion makesound()
  {
    echo "sqeak";
  }
}

$cat=new Cat();
$dog=new Dog();
$mouse=new Mouse();
cat->makesound();
?>


 <?php
class Student
{
    public $var = "This is first var"; // Using public instead of var
    protected $firstname;
    protected $lastname;

    function returnVar()
    {
        echo $this->firstname; // Should return or echo $this->firstname
    }

    function setFirstname($fname, $lname)
    {
        $this->firstname = $fname;  // Fixed variable name
        $this->lastname = $lname;
    }
}

class Result extends Student
{
    public $percentage;

    function setPercentage($p)
    {
        $this->percentage = $p;
    }

    function getVal()
    {
        echo "Name: $this->firstname $this->lastname";
        echo "<br>";
        echo "Result: $this->percentage%";
    }
}

// Object Creation and Method Calls
$res1 = new Result();
$res1->setFirstname("Rita", "Patel"); // Fixed function name
$res1->setPercentage(95);
$res1->getVal();
?>

<?php
abstract class Human{
    static $noOfLegs = 2;

    static public function getNoofLegs(){
        echo self::$noOfLegs. "<br>";
    }
    abstract public function growing();
    public function hasName(){
        //every one should has a name ....
    }
}

class Person extends Human{

    private  $name;
    public $age;
    public $language;
    protected $maritalstatus;
//trying to overload the final functino .......
    public function checkFinalFunction(){
        echo "person";
    }



    public function __construct($name, $age, $language, $maritalstatus){
        $this->name = $name;
        $this->age = $age;
        $this->language = $language;
        $this->maritalstatus = $maritalstatus;
    }
    public function __destruct(){
        echo("<br>this object was destroyed");
    }

    public function sayHi(){
        echo " <br>Hi,  we are powercoders!<br>".$this->name;
    }

    public function getMaritalStatus(){
        return $this->maritalstatus;
    }
    public function growing()
    {
        //child is still growing over time ...
        echo "i am growing";

    }
}
class Child extends Person{
    public $mother;
    public $father;

    
    public function growing()
    {
        //child is still growing over time ...
        echo "i am growing";

    }
}
class Adult extends Person{

    function checkFinalFunction(){
        echo "Adult";
    }


    public function growing()
    {
        echo "i am not growing anymore in size<br>";
        //no growing anymore ...
    if($this->age > 65){
        //negative growing ...
    }
        
    }
    
}


$hasan = new Adult("<br>Hasan<br>", "27","ar","<br>single<br>");
$hasan->sayHi();
$hasan->father = "Safouh";
$hasan->growing();
Human::getNoofLegs();
echo Human::$noOfLegs. "<br>";
$hasan::checkFinalFunction();
echo $hasan->getMaritalStatus(). "<br>";


?>
<?php

class Person{

    private  $name;
    public $age;
    public $language;
    protected $maritalstatus;


    public function __construct($name, $age, $language, $maritalstatus){
        $this->name = $name;
        $this->age = $age;
        $this->language = $language;
        $this->maritalstatus = $maritalstatus;
    }
    public function __destruct(){
        echo("this object was destroyed");
    }

    public function sayHi(){
        echo " Hi,  we are powercoders!".$this->name;
    }
}
$hasan = new Person("Hasan", "27","ar","single");
$hasan->sayHi();


?>
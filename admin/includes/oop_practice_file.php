<?php 


class MyClass {

    private $property;

    public function setProperty($value){

     $this->property = $value;
    }

    public function getProperty(){

    	return $this->property = "Access Private Property From Parent classes.";
    }

}


class MyClass2 extends MyClass {
    
    public function getProperty(){
    	return $this->property = "Access Private Property From Sub Classes.";
    }
}


$myClass = new MyClass();
echo "<h1>". $myClass->getProperty() . "</h1><br>";
$myClass = new MyClass2();

echo "<h1>". $myClass->getProperty() . "</h1><br>";




 ?>
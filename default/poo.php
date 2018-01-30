<?php

class Human
{
  private $name;  
  private $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function get_age(){
    return $this->age;
  }

  public function get_name(){
    return $this->name;
  }

  public function birthday(){
    $this->age++;
  }
}

class Toto extends Human
{
  public function __construct($age) {
    parent::__construct("toto", $age);
  }

  public function finger_in_the_nose() {
    echo "disgusting !";
  }
  
  public function get_age() {
    return "toto à ".parent::get_age()." ans";
  }
}

$toto = new Toto(10);
var_dump($toto);
echo "<br>";
$toto->finger_in_the_nose();
echo "<br>";
echo $toto->get_age();

<?php
class Animal {
  private $test = "I am an animal.";
  public function get_species() {
      echo $this->test;
  }
}
class Dog extends Animal {
  public function __construct(
  }
  public function get_species(){
    parent::get_species();
  }
}
$spike = new Dog; $spike->get_species();
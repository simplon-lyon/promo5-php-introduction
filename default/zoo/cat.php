<?php
namespace zoo;
include "animal.php";
class Cat extends Animal {
  private $color;
  private $race;
  private $domesticated;
  private $name;

  public function __construct(string $name, string $race, array $color = [], bool $domesticated = true){
    parent::__construct();
    $this->color = $color;
    $this->race = $race;
    $this->domesticated = $domesticated;
    $this->name = $name;   
  }

  public function get_color():array {
    return $this->color;
  }

  public function get_race():string {
    return $this->race;
  }

  public function get_domesticated():bool {
    return $this->domesticated;
  }

  public function get_name():string {
    return $this->name;
  }

  public function meow():string {
    return "miaouhh";
  }

  public function scratch():string {
    return "claw";
  }

  public function hunt():string {
    return "run after a mouse";
  }
}
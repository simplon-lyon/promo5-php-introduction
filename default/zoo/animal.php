<?php
namespace zoo;
class Animal {
  private $nb_legs;
  private $nb_eyes;
  
  public function __construct(int $nb_legs = 4, int $nb_eyes = 2){
    $this->nb_legs = $nb_legs;
    $this->nb_eyes = $nb_eyes;
  }

  public function get_legs():int {
    return $this->nb_legs;
  }

  public function get_eyes():int {
    return $this->nb_eyes;
  }

  public function eat():string {
    return "I am eating";
  }

  public function sleep():string {
    return "I am sleeping";
  }

  public function walk():string {
    return "I am walking";
  }
}
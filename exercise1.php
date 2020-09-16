<?php

class Beverage
{
  // Properties
  public $color;
  public $price;
  public $temperature;

  // Constructor
  public function __construct($color, $price, $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
  }

  // Methods
  public function getInfo()
  {
    return 'This beverage is ' . $this->temperature . ' and ' . $this->color;
  }
}

$cola = new Beverage('black', 2);
echo $cola->getInfo();

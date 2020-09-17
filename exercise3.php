<?php

// EXERCISE ONE
class Beverage
{
  // Properties
  private string $color;
  private int $price;
  private string $temperature;

  // Constructor
  public function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
  }

  // Getters and Setters
  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setTemperature($temperature)
  {
    $this->temperature = $temperature;
  }

  public function getTemperature()
  {
    return $this->temperature;
  }

  // Methods
  public function getInfo()
  {
    return 'This beverage is ' . $this->temperature . ' and ' . $this->color;
  }
}

// EXERCISE TWO
class Beer extends Beverage
{
  private string $name;
  private float $alcoholPercentage;

  public function __construct(string $color, float $price,  string $name, float $alcoholPercentage, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setAlcoholPercentage($alcoholPercentage)
  {
    $this->alcoholPercentage = $alcoholPercentage;
  }

  public function getAlcoholpercentage()
  {
    return $this->alcoholPercentage . '%';
  }

  public function beerInfo(): string
  {
    return 'Hi i\'m ' . $this->name . ' and have an alcohol percentage of ' . $this->alcoholPercentage . ' and I have a ' . $this->color . ' color';
  }
}

$duvel = new Beer('blond', 3.5, 'Duvel', 8.5);
echo '<br>';
echo $duvel->getAlcoholpercentage();
echo '<br>';
echo $duvel->getColor();
echo '<br>';
// echo $duvel->getInfo();
$duvel->setColor('light');
echo $duvel->beerInfo();

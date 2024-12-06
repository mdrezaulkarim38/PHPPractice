<?php
/**
 * User Shuvo The Superman
 */

class Car
{
    public $color = 'red';
    public $weight = 2000;

    public function __construct($color, $weight)
    {
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor()
    {
        return $this->color;
    }
}

$myCar = new Car('green', 2500);
$myCar2 = new Car('white', 18000);

echo $myCar->getColor() . PHP_EOL;
echo $myCar2->getColor() . PHP_EOL;



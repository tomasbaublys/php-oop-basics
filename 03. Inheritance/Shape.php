<?php 

/* Classes defined as abstract may not be initiated */
abstract class Shape {
	
	protected $color;

	/* we set default color to red this way: $color = 'red' */
	public function __construct($color = 'red')
	{
		$this->color = $color;
	}

	/* or we could set color manualy with getColor method */
	public function getColor()
	{
		return $this->color;
	}

	/* When inheriting from an abstract class, all methods marked abstract in the parent's class declaration must be defined by the child */
	abstract protected function getArea();
}

class Square extends Shape {
	
	protected $length = 4;

	public function getArea()
	{
		return pow($this->length, 2);
	}
}

class Triangle extends Shape {
	
	protected $base = 4;
	protected $height = 7;

	public function getArea()
	{
		return .5 * $this->base * $this->height;
	}
}

class Circle extends Shape {
	
	protected $radius = 5;

	public function getArea()
	{
		return M_PI * pow($this->radius, 2);
	}
}


$circle = new Circle(); // long way to initiate method
echo $circle->getArea() . '</br>';

echo (new Circle)->getArea(); // short way to initiate method

<?php 

// CLASS, PROPERTY, METHODS //
class Kitten 
{
	public $name;

	public function speak()
	{
		$name = $this->name;
		echo $name .': MEOW!' . "<br>";
	}
}

$kitten = new Kitten();
$kitten->name = 'Oswald';
$kitten->speak();

// CLASS, PROPERTY, METHODS //
class Puppy 
{
	public $name;

	public function bark()
	{
		$name = $this->name;
		echo $name .': WOOF!' . "<br>";
	}
}

$tobias = new Puppy();
$jerry = new Puppy();
$homer = new Puppy();

$tobias->name = 'Tobias';
$jerry->name = 'Jerry';
$homer->name = 'Homer';

$tobias->bark();
$jerry->bark();
$homer->bark();

// CLASS, PROPERTY, METHODS, ARRAY, FOREEACH //
class Kiten
{
	public $name;

	public function speak()
	{
		$name = $this->name;
		echo $name .': MEOW!' . '<br>';
	}
}

$ginger = new Kiten();
$lucille = new Kiten();
$tiger = new Kiten();
$misty = new Kiten();

$ginger->name = 'Ginger';
$lucille->name = 'Lucille';
$tiger->name = 'Tiger';
$misty->name = 'Misty';

$ginger->speak();
$lucille->speak();
$tiger->speak();
$misty->speak();

$kitens = [ 
	$ginger, $lucille, $tiger, $misty
];

foreach ($kitens as $kiten) { 
	$kiten->speak();
}

// CONSTRUCTOR // 
class Sample
{
	public function __construct()
	{
		echo 'Sample is being constructed<br>';
	}

	public function printSomething()
	{
		echo 'Sample is printing something<br>';
	}
}

echo 'Creating new sample<br>';
$sample = new Sample();
echo 'Lets print something<br>';
$sample->printSomething();
echo 'I\'m done<br>';


// CONSTRUCTOR, ARGUMENT // 
class Pupppy 
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function bark()
	{
		$name = $this->name;
		echo $name . ':WOF!' . '<br>';
	}
}

$pupppy = new Pupppy('Bailey');
$pupppy->bark();

// CONSTRUCTOR, ARGUMENT, FOREACH // 
class Puppy3 
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function speakAll()
	{
		$name = $this->name;
		echo $name . ':MEOW!' . '<br>';
	}
}

$ginger = new Puppy3('Ginger');
$lucille = new Puppy3('Lucille');
$tiger = new Puppy3('Tiger');
$misty = new Puppy3('Misty');

$kitens = [
	$ginger, $lucille, $tiger, $misty
];

foreach ($kitens as $katukas) {
	$katukas->speakAll();
}

// CONSTRUCTOR, DESTRUCTOR // 
class Sample2 
{
	public $name;

	public function __construct($name)
	{
		$this->name = $name;
		echo 'Hi, ' . $name . '<br>';
	}

	public function __destruct()
	{
		$name = $this->name;
		echo 'Buy ' . $name . '<br>';
	}
}

$tomas = new Sample2('Tomas');
$jonas = new Sample2('Jonas');
$niekas = new Sample2('Niekas');


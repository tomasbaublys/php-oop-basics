<?php 

// The code below creates the class
class Person 
{
	// Creating properties (variables tied to an object)
	public $isAlive = true;
	public $firstName;
	public $lastName;
	public $age;

	public function __construct($firstName, $lastName, $age)
	{
		// Assigning the values
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
	}

	// Creating a method (function tied to an object)
	public function greetings()
	{
		echo "Hello, my name is " . $this->firstName . " " . $this->lastName . ". Nice to meet you! :-)";
	}
}

// Creating a new person
$tomas = new Person("Tomas", "Baublys", 38);
// Printing out greeting
$tomas->greetings();
var_dump($tomas);
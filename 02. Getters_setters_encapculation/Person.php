<?php 

class Person {

	/* private property don't all to change age
	by accessing it directly, for example if we 
	writ $jonas->age = 8; an Exception error will 
	appers */

	private $name;
	private $age;

	public function __construct($name)
	{
		$this->name = $name;
	}

	/* we use getter method to get specific behavior
	in this example we could count how old Jonas is in days */
	
	public function getAge()
	{
		return $this->age * 365;
	}

	/* we use setter method to set Jonas age
	it helps for example to add behavior which 
	check age of person */

	public function setAge($age)
	{
		if ($age < 18) 
		{
			throw new Exception("Person is not old enough");
		}
		$this->age = $age;
	}
}

$jonas = new Person('Jonas Jonaitis');
$jonas->setAge(38);

var_dump($jonas->getAge());
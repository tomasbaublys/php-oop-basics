<?php 

// examle of method usage
class Math {

	/* recent PHP version also could apply such code:
	public static function add(...$nums)
	{
		return array_sum($nums);
	} 
	*/
	public static function add()
	{
		return array_sum(func_get_args());
	}
}

/* we could call static method like Class::method();
It could be referenced and called enywhere in application 
without reequiring a specific instance */
echo 'Sum is: ' . Math::add(1, 2, 3, 4) . '</br>';


// example of constant usage, by creating it we can never change this value
class BankAccount {
	const TAX = .21; 
}

echo BankAccount::TAX . '</br>';

// Bad example of static properties usage
class Person {
	public static $age = 1;

	public function haveBirthday()
	{
		static::$age += 1;
	}
}

$jonas = new Person;
$jonas->haveBirthday();
$jonas->haveBirthday();

$jane = new Person;
$jane->haveBirthday();


echo 'Jonas age: ' . $jonas::$age . '</br>';
echo 'Jane age: ' . $jane::$age . '</br>'; 

/* static properties are shared, Jane age is 4 incase 2
use example below with Person2 class with non static property */

class Person2 {
	public  $age = 1;

	public function haveBirthday()
	{
		$this->age += 1;
	}

	public function age()
	{
		return $this->age;
	}
}

$jonas2 = new Person2;
$jonas2->haveBirthday();
$jonas2->haveBirthday();

echo 'Jonas age: ' .  $jonas2->age() . '</br>';

$jane2 = new Person2;
$jane2->haveBirthday();

echo 'Jane age: ' .  $jane2->age() . '</br>';
<?php 

class Person {

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

class Business {

	protected $staff;

	/* each business has at least one staff which 
	opens business, so constructor will creat one automatically */
	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	// method hire() sends message to Staff method add()  
	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

	/* method to fetch all staff members
	which sends message to Staff method members() */
	public function getStaffMembers()
	{
		return $this->staff->members();
	}
}

class Staff {

	// array of all staff
	protected $members = [];

	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add(Person $person)
	{
		$this->members[] = $person;
	}

	// we also can name it as getMemebers() because it is a getter
	public function members()
	{
		return $this->members;
	}
}

// creating a new Person
$jonas = new Person('Jonas Jonaitis');

$staff = new Staff([$jonas]);
$company = new Business($staff);
$company->hire(new Person('Petras Petraitis'));

var_dump ($company->getStaffMembers());
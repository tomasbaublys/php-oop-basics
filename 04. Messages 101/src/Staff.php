<?php 

namespace Acme;

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
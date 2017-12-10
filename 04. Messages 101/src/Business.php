<?php 

namespace Acme;

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
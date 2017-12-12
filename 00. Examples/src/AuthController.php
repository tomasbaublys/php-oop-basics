<?php 

namespace Acme;

class AuthController implements RespondsToUserRegistration {

	protected $registration;

	public function __construct(RegisterUser $registration) // constructor injection, use it in multiple classes
	{
		$this->registration = $registration;
	}

	public function register() 
	{
		$this->registration->execute([], $this);
	}

	public function userRegisteredSuccessfully()
	{
		var_dump('created successfully. redirect somewhere');
	}

	public function userRegisterFailed()
	{
		var_dump('created unsuccessfully. redirect back');
	}
}


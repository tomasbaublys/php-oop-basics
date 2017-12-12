<?php 

/* imagine interface ass contract. 
all methods declared in an interface must be public; this is the nature of an interface.
*/
interface Provider {
	public function authorize();
}

// ..

function login(Provider $provider)
{
	$provider->authorize();
}

/* we must create a subclass where we could initiate abstract methods
abstract class let us create abstract protected methods */
abstract class Provider {
	abstract protected getAuthorizationUrl();
}

class FacebookProvider extends Provider {
	protected function getAuthorizationUrl()
	{
		return '';
	}
}

/* interfaces and apstract classes could work together */
interface Provider {
	public function getAuthorizationUrl();
}

abstract class AbstractProvider {
	protected function related() 
	{

	}
}

class FacebookProvider implements Provider {
	protected function getAuthorizationUrl()
	{
		return '';
	}
}

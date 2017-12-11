<?php 

// 1. EXAMPLE with an ability to communicate.
interface Animal {
	public function communicate();
}

class Dog implements Animal {
	public function communicate()
	{
		return 'bark';
	}
}

class Cat implements Animal {
	public function communicate()
	{
		return 'meow';
	}
}

// 2. EXAMPLE with login option file/database.
interface Logger {
	public function execute($message);
}

class LogToFile implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a file '. $message);
	}
}

class LogToDatabase implements Logger {
	public function execute($message)
	{
		var_dump('log the message to a database ' . $message);
	}
}

// ...somewhere in your app

/* if we decide to change loging method from file to database, 
with a help of interface, class UsersControllers doesn't need to be updated. */
class UsersController {

	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = "Jonas";

		// log this information
		$this->logger->execute($user);
	}
}

$controller = new UsersController(new LogToDatabase);
$controller->show();

// 3. EXAMPLE filters in blog
interface CanBeFiltered {
	public function filter();
}

class Favorited implements CanBeFiltered {
	public function filter()
	{
		
	}
}

class Unwatched implements CanBeFiltered {
	public function filter()
	{
		
	}
}

class Dificulty implements CanBeFiltered {
	public function filter()
	{
		
	}
}
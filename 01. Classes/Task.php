<?php 

class Task {
	public $title;
	public $description;
	public $completed = false;

	/* constructor - new method which is called immediately
	when we initiate a new class */

	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}


	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task('Store', 'Go to store');
$task->complete();

var_dump($task);




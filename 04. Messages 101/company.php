<?php 

/**
 *	we use composer incase require each separate class:
 *	1. create composer.json file in project root and leave { };
 *	2. type in shell working directory 'composer instal';
 *	3. update code in vendor/autoload.php file;
 * 	4. add 'namespace Acme;' to each class in src folder;
 *  5. type in shell working directory 'composer dump-autoload';
 *  6. create index.php file and write require 'vendor/autoload.php' 
 *  and 'company.php' files;
 *  7. write use Acme\Person, Acme\Business and Acme\Staff in 'company.php' file
 */

use Acme\Person;
use Acme\Business;
use Acme\Staff;


$jonas = new Person('Jonas Jonaitis');
$staff = new Staff([$jonas]);
$company = new Business($staff);
$company->hire(new Person('Petras Petraitis'));

var_dump ($company);
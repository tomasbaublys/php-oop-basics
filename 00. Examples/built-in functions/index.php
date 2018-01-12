<?php
    class Person {
      public $isAlive = true;
      
      function __construct($name) {
          $this->name = $name;
      }
      
      public function dance() {
        return "I'm dancing!";
      }
    }
    $me = new Person("Shane");
    // is_a(), use to find out if a particular object is an instance of a given class;
    if (is_a($me, "Person")) {
      echo "I'm a person, ";
    }
    // property_exists(), to see if an object has a given property
    if (property_exists($me, "name")) {
      echo "I have a name, ";
    }
    // method_exists(), to see if an object has a given method.
    if (method_exists($me, "dance")) {
      echo "and I know how to dance!";
    }
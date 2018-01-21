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

    function criteria_greater_than($min)
    {
        return function($item) use ($min) {
            return $item > $min;
        };
    }

    $input = array(1, 2, 3, 4, 5, 6);

    // Use array_filter on a input with a selected filter function
    $output = array_filter($input, criteria_greater_than(3));

    print_r($output); // items > 3

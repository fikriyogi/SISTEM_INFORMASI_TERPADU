<?php
Interface MyInterface1 {
    public function myMethod1();
}
Interface MyInterface2 {
    public function myMethod2();
}
class MyClass implements MyInterface1, MyInterface2 {
    public function myMethod1() {
        echo "Hello ";
    }
    public function myMethod2() {
        echo "World";
    }
}

class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }
    public function introduce() {
        echo "My name is {$this -> name}. My age is {$this -> age}";
    }
}
/* Tom is inherited from Person */
class Tom extends Person {
    # __construct() is inherited
    # introduce() is inherited
    public function sayHello() {
        echo "Hello, World <br>";
    }
}


//Trait
Trait Hello {
    public function hello() {
        echo "Hello";
    }
}
Trait World {
    public function world() {
        echo "World";
    }
}
class Ass {
    use Hello, World;
}
$obj = new Ass();
$obj -> hello();
$obj -> world();


$obj = new MyClass();
$obj -> myMethod1();
$obj -> myMethod2();

$tom = new Tom('Tom', 29);
$tom -> sayHello();
$tom -> introduce();



class Welcome {
    const GREET = 'Hello World';
    public function greet() {
        echo self::GREET;
    }
}
$welcome = new Welcome();
$welcome -> greet();

echo "<br>";
echo Welcome::GREET;



class User {
    public $firstname;
    public $lastname;

    /**
     * @param string $firstname - Firstname of the user
     * @param string $lastname  - Lastname of the user
     */
    public function __construct($firstname, $lastname) {
        $this -> firstname = self::filterName($firstname);
        $this -> lastname = self::filterName($lastname);
    }

    /**
     * @param string $name - name to filter
     * @return string - filtered name
     */
    static function filterName($name) {
        // remove surrounding whitespaces
        $name = trim($name);
        // remove non-latin and non-number characters
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $name);

        return $name;
    }
}
$user = new User('Michael ', '$Jackson');
echo $user -> firstname . ' ' . $user -> lastname;


/*
 * Using "use" in Namespaces to Import
 * The use keyword can be used to import a class to the current scope.
 * If you add the following code in your index.php, Math\Geometry\Circle class will be imported to the current scope.
*/


use Math\Geometry\Circle;

$circle = new Circle(10); // as Circle class is now in this namespace

/*
 * You can import both namespaces and classes
 * */

use Math\Geometry; // importing an namespace
use Math\Geometry\Circle; // importing a class
/*
 * You can nickname (or alias) the imports
There are two places to use nicknames (or aliases) for importing classes.

When you already have a class named the same name as the importing class
When you need a more convenient (or easy) name for the importing class
The as keyword is used for nicknaming.
*/



use Math\Geometry\Circle as Circ;

$circle = new  Circ(10);
/*
 * Changing the previous example
 * Let's change our index.php of the previous example adding use statements to import the class.
 */


// ... import statements

use Math\Geometry\Circle;
$circle = new Circle(10);

// ... calling methods

/*
 * As we did not have an as keyword, the imported class could be referred to using Circle. We can also import the Circle class with a nickname.*/


use Math\Geometry\Circle as C;
$circle = new C(10);

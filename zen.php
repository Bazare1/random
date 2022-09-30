<?php 

// class Dog {
// public $name;
// public $age;
// public $color;
// }
// $roger = new Dog();
// $roger->name = 'Roger';
// $roger->age = 10;
// $roger->color = 'gray';
// var_dump($roger);

    
// 'break';
//     class box {
//         public function bark() {
//         echo 'woof! ';
//         }
//         }
//         $roger = new box();
//         $roger->bark();


//         class Dog {
//             public $name;
//             public function bark() {
//             echo $this->name . ' barked!';
//             }
//             }
//             $roger = new Dog();
//             $roger->name = 'Roger';
//             $roger->bark();


// class Dog {
//     public $name;
//     public function __construct($name) {
//     $this->name = $name;
//     }
//     public function bark() {
//     echo $this->name . ' barked!';
//     }
//     }
//     $roger = new Dog('Roger');
//     $roger->bark();

// class Animal {
//     public $age;
//     public function eat() {
//     echo 'the animal is eating';
//     }
//     }
//     class Dog extends Animal {
//     }
//     $roger = new Dog();
//     $roger->eat();

// class Animal {
//     public $age;
//     public function eat() {
//     echo 'the animal is eating';
//     }
//     }
//     class Dog extends Animal {
//     public function eat() {
//     echo 'the dog is eating';
//     }
// // }

// class Utils {
//     public static function version() {
//     return '1.0';
//     }
//     }
//     Utils::version();


// class Dog {
// public $name = 'Good dog';
// }
// $roger = new Dog();
// $syd = new Dog();
// echo $roger == $syd; //true
// echo $roger === $syd;

class Dog {
    public $name = 'Good dog';
    public $age = 10;
    public $color = 'gray';
    }
    $dog = new Dog();
    foreach ($dog as $key => $value) {
    echo $key . ': ' . $value . '<br>';
    }

//     50
// class Dog {
//     public $name;
//     }
//     $roger = new Dog();
//     $roger->name = 'Roger';
//     $syd = clone $roger;    

class cat {
    public $name;
    public function __clone() {
    $this->cloned = true;
    }
    }
    $roger = new cat();
    $roger->name = 'Roger';
    $syd = clone $roger;
    echo $syd->cloned;

    
    try {
        echo 1 / 5;
        } catch (Throwable $e) {
        echo $e->getMessage();
        }

        '<br>';
        echo strtotime('now');
        '<br>';
        echo strtotime('4 May 2020'. '<br>' );
        echo strtotime('+1 day');
        echo strtotime('+1 month');
        echo strtotime('last Sunday');
        '<br>';
        echo date('Y-m-d') ;
        '<br>'; 

        define('TEST', 'some value');
        echo TEST;
        file_exists('signup.php');
        
        $file = fopen('signup.php', 'r');
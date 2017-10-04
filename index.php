<?php
require 'classes/Animal.php';
require 'classes/Cat.php';
require 'classes/Dog.php';
require 'classes/Sparrow.php';
require 'classes/Rat.php';
require 'classes/Penguin.php';
require 'classes/Whale.php';
require 'classes/Unicorn.php';
require 'classes/Zoo.php';

use classes\Cat\Cat;
use classes\Dog\Dog;
use classes\Sparrow\Sparrow;
use classes\Rat\Rat;
use classes\Penguin\Penguin;
use classes\Whale\Whale;
use classes\Unicorn\Unicorn;
use classes\Zoo\Zoo;
use interfaces\CanFly\CanFly;
use interfaces\CanSwim\CanSwim;
use interfaces\Mystic\Mystic;

$cat = new Cat('cat');
$cat->setMove('walk');

$dog = new Dog('dog');
$dog->setMove('run');
$dog->setBite('man');

$sparrow = new Sparrow('sparrow');
$sparrow->setMove('fly');

$rat = new Rat('rat');
$rat->setMove('run');

$penguin = new Penguin('penguin');
$penguin->setMove('walk');

$unicorn = new Unicorn('unicorn');
$unicorn->setMove('run');

$whale = new Whale('whale');
$whale->setMove('swim');

$zoo = new Zoo();
$zoo->addAnimal($cat)
    ->addAnimal($dog)
    ->addAnimal($sparrow)
    ->addAnimal($rat)
    ->addAnimal($penguin)
    ->addAnimal($whale)
    ->addAnimal($unicorn)
;

foreach($zoo->getAnimals() as $animal){
    echo $animal->getSays().'<br>';
    echo $animal->getMove().'<br>';
    echo $animal->getEat().'<br>';

    if ($animal instanceof CanFly) {
        echo $animal->getFly().'<br>';
    }

    if ($animal instanceof CanSwim) {
        echo $animal->getSwim().'<br>';
    }

    if ($animal instanceof Mystic) {
        echo $animal->getMystic().'<br>';
    }

    if(get_class($animal) == 'Dog'){
        echo $animal->getBite().'<br>';
    }
}
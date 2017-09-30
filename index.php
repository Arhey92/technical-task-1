<?php
require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'Sparrow.php';
require 'Rat.php';
require 'Zoo.php';

use Cat\Cat;
use Dog\Dog;
use Sparrow\Sparrow;
use Rat\Rat;
use Zoo\Zoo;

$cat = new Cat('cat');
$cat->setMove('walk');

$dog = new Dog('dog');
$dog->setMove('run');
$dog->setBite('man');

$sparrow = new Sparrow('sparrow');
$sparrow->setMove('fly');

$rat = new Rat('rat');
$rat->setMove('run');


$zoo = new Zoo();
$zoo->addAnimal($cat)
    ->addAnimal($dog)
    ->addAnimal($sparrow)
    ->addAnimal($rat)
;

foreach($zoo->getAnimals() as $animal){
    echo $animal->getSays().'<br>';
    echo $animal->getMove().'<br>';
    echo $animal->getEat().'<br>';

    if(get_class($animal) == 'Dog'){
        echo $animal->getBite().'<br>';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 17:26
 */
declare(strict_types=1);

require 'Animal.php';
require 'Cat.php';
require 'Dog.php';
require 'Sparrow.php';
require 'Rat.php';

use PHPUnit\Framework\TestCase;
use Cat\Cat;
use Dog\Dog;
use Sparrow\Sparrow;
use Rat\Rat;


final class AnimalTests extends TestCase
{
    public function testCreateCat()
    {
        $name = 'cat';
        $cat = new Cat($name);
        $cat->setMove('walk');

        $this->assertEquals(
            $name,
            $cat->getName()
        );

        $this->assertEquals(
            $cat->getName().' is walk',
            $cat->getMove()
        );

        $this->assertEquals(
            $cat->getName().' says meow',
            $cat->getSays()
        );
    }

    public function testCreateDog()
    {
        $name = 'Fluffy';
        $dog = new Dog($name);
        $dog->setMove('run');
        $dog->setBite('man');
        $dog->setEat('meat');

        $this->assertEquals(
            $name,
            $dog->getName()
        );

        $this->assertEquals(
            $dog->getName().' is run',
            $dog->getMove()
        );

        $this->assertEquals(
            $dog->getName().' bitten man',
            $dog->getBite()
        );
    }

    public function testCreateSparrow()
    {
        $name = 'Jack';
        $sparrow = new Sparrow($name);
        $sparrow->setMove('fly');
        $sparrow->setEat('corn');

        $this->assertEquals(
            $name,
            $sparrow->getName()
        );
    }

    public function testCreateRat()
    {
        $name = 'Boss';
        $rat = new Rat($name);
        $rat->setMove('run');
        $rat->setEat('corn');

        $this->assertEquals(
            $name,
            $rat->getName()
        );
    }
}
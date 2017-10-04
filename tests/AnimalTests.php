<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 17:26
 */
declare(strict_types=1);

require 'classes/Animal.php';
require 'classes/Cat.php';
require 'classes/Dog.php';
require 'classes/Sparrow.php';
require 'classes/Rat.php';
require 'classes/Penguin.php';
require 'classes/Whale.php';
require 'classes/Unicorn.php';

use PHPUnit\Framework\TestCase;
use classes\Cat\Cat;
use classes\Dog\Dog;
use classes\Sparrow\Sparrow;
use classes\Rat\Rat;
use classes\Penguin\Penguin;
use classes\Whale\Whale;
use classes\Unicorn\Unicorn;


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

    public function testCreatePenguin()
    {
        $name = 'penguin';
        $penguin = new Penguin($name);
        $penguin->setMove('walk');
        $penguin->setEat('fish');

        $this->assertEquals(
            $name,
            $penguin->getName(),
            $penguin->getSwim()
        );
    }

    public function testCreateWhale()
    {
        $name = 'whale';
        $whale = new Whale($name);
        $whale->setMove('swim');
        $whale->setEat('plankton');

        $this->assertEquals(
            $name,
            $whale->getName(),
            $whale->getSwim()
        );
    }

    public function testCreateUnicorn()
    {
        $name = 'unicorn';
        $unicorn = new Unicorn($name);
        $unicorn->setMove('run');
        $unicorn->setEat('grass');

        $this->assertEquals(
            $name,
            $unicorn->getName(),
            $unicorn->getMystic()
        );
    }
}
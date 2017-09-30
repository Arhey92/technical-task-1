<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:34
 */
declare(strict_types=1);
namespace Cat;

use Animal\Animal;

class Cat extends Animal
{
    /**
     * Create our cat =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('meow');
        $this->setEat('milk');
    }
}
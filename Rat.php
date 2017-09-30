<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:40
 */
declare(strict_types=1);
namespace Rat;

use Animal\Animal;

class Rat extends Animal
{
    /**
     * Create our rat =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('pi');
        $this->setEat('grain');
    }
}
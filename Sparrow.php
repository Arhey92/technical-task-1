<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:39
 */
declare(strict_types=1);
namespace Sparrow;

use Animal\Animal;

class Sparrow extends Animal
{
    /**
     * Create our sparrow =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('tweet');
        $this->setEat('corn');
    }
}
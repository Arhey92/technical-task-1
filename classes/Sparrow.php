<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:39
 */
declare(strict_types=1);
namespace classes\Sparrow;

require 'interfaces/CanFly.php';

use classes\Animal\Animal;
use interfaces\CanFly\CanFly;

class Sparrow extends Animal implements CanFly
{
    /** @var  string */
    private $fly = '';

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
        $this->setFly('fly');
    }

    /**
     * Set animal fly
     *
     * @param string $fly
     */
    public function setFly(string $fly) : void
    {
        $this->fly = $fly;
    }

    /**
     * Get animal fly
     *
     * @return string
     */
    public function getFly() : string
    {
        return $this->getName().' can '.$this->fly;
    }
}
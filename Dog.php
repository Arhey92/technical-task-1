<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:36
 */
declare(strict_types=1);
namespace Dog;

use Animal\Animal;

class Dog extends Animal
{
    /** @var  string */
    private $bite = '';

    /**
     * Create our dog =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('wuf');
        $this->setEat('meat');
    }

    /**
     * Set animal bite
     *
     * @param string $bite
     */
    public function setBite(string $bite) : void
    {
        $this->bite = $bite;
    }

    /**
     * Get animal bite
     *
     * @return string
     */
    public function getBite() : string
    {
        return $this->getName().' bitten '.$this->bite;
    }
}
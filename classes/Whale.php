<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 04.10.2017
 * Time: 23:53
 */
declare(strict_types=1);
namespace classes\Whale;

use classes\Animal\Animal;
use interfaces\CanSwim\CanSwim;

class Whale extends Animal implements CanSwim
{
    /** @var  string */
    private $swim = '';

    /**
     * Create our whale =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('Whale song');
        $this->setEat('plankton');
        $this->setSwim('swim');
    }

    /**
     * Set animal swim
     *
     * @param string $swim
     */
    public function setSwim(string $swim) : void
    {
        $this->swim = $swim;
    }

    /**
     * Get animal swim
     *
     * @return string
     */
    public function getSwim() : string
    {
        return $this->getName().' can '.$this->swim;
    }
}
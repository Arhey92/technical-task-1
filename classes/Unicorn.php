<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 05.10.2017
 * Time: 0:30
 */
declare(strict_types=1);
namespace classes\Unicorn;

require 'interfaces/Mystic.php';

use classes\Animal\Animal;
use interfaces\Mystic\Mystic;

class Unicorn extends Animal implements Mystic
{
    /** @var  string */
    private $mystic = '';

    /**
     * Create our penguin =)
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->setSays('whinny');
        $this->setEat('grass');
        $this->setMystic('mystic');
    }

    /**
     * Set animal mystic
     *
     * @param string $mystic
     */
    public function setMystic(string $mystic) : void
    {
        $this->mystic = $mystic;
    }

    /**
     * Get animal mystic
     *
     * @return string
     */
    public function getMystic() : string
    {
        return $this->getName().' is '.$this->mystic;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:31
 */
declare(strict_types=1);
namespace Animal;


class Animal
{
    /** @var  string */
    private $name = '';

    /** @var  string */
    private $says = '';

    /** @var  string */
    private $move = '';

    /** @var  string */
    private $eat = '';


    /**
     * Set name for animal
     *
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * Get animal name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set animal says
     *
     * @param string $says
     */
    public function setSays(string $says) : void
    {
        $this->says = $says;
    }

    /**
     * Get animal says
     *
     * @return string
     */
    public function getSays() : string
    {
        return $this->getName().' says '.$this->says;
    }

    /**
     * Set animal move
     *
     * @param string $move
     */
    public function setMove(string $move) : void
    {
        $this->move = $move;
    }

    /**
     * Get animal move
     *
     * @return string
     */
    public function getMove() : string
    {
        return $this->getName().' is '.$this->move;
    }

    /**
     * Set animal eat
     *
     * @param string $eat
     */
    public function setEat(string $eat) : void
    {
        $this->eat = $eat;
    }

    /**
     * Get animal eat
     *
     * @return string
     */
    public function getEat() : string
    {
        return $this->getName().' eat '.$this->eat;
    }
}
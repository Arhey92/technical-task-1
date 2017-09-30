<?php
/**
 * Created by PhpStorm.
 * User: Arhey
 * Date: 30.09.2017
 * Time: 16:41
 */
declare(strict_types=1);
namespace Zoo;

use Animal\Animal;

class Zoo
{
    /** @var array */
    private $animals = [];
    /**
     * Add animals to collection
     *
     * @param Animal $animal
     * @return $this
     */
    public function addAnimal($animal)
    {
        if ($animal instanceof Animal)
        {
            $this->animals[] = $animal;
        }
        return $this;
    }

    /**
     * Get animals collection
     *
     * @return array
     */
    public function getAnimals()
    {
        return $this->animals;
    }
}
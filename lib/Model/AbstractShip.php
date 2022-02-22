<?php

abstract class AbstractShip
{
    private $id;
    private $name;
    private $weaponPower;
    private $strength;
    abstract public function getJediFactor();
    abstract public function getType();
    abstract public function isFunctional();


        /**
     * @param string $name
     * @param int $weaponPower
     * @param int $jediFactor
     * @param int $strength
     */
    public function __construct($name, $weaponPower = 0, $jediFactor = 0, $strength = 0)
    {
        if (!is_string($name)) {
            throw new \Exception('Name must be text, duh!');
        }
        $this->name = $name;
        if (!is_numeric($weaponPower)) {
            throw new \Exception('Weapon power must be a number, duh!');
        }
        $this->weaponPower = $weaponPower;
        if (!is_numeric($jediFactor)) {
            throw new \Exception('Jedi factor must be a number, duh!');
        }
        $this->strength = $strength;
    }


    public function sayHello()
    {
        echo "Hello, I'm " . $this->getName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($n)
    {
        return $this->name = $n;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        if (!is_numeric($strength)) {
            throw new \Exception('Strength must be a number, duh!');
        }
        $this->strength = $strength;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }



    public function getNameAndSpecs($short = false )
    {
        if ($short) {
            return sprintf(
                "%s: w:%s/j:%s/s:%s",
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        } else {
            return sprintf(
                "%s: w%s, j:%s, s:%s",
                $this->name,
                $this->weaponPower,
                $this->getJediFactor(),
                $this->strength
            );
        }
    }

    /**
     * @param Ship $givenShip
     * @return bool
     */
    public function doesGivenShipHaveMoreStrength($givenShip)
    {
        return $givenShip->getStrength() > $this->getStrength();
    }
}
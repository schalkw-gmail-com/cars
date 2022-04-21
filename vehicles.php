<?php

//TODO build out the vehicle main class. It should have all needed getters and setters.
/*
 * 
 */

class Vehicle{
    
    // Properties
    public $colour;
    private $body_type;
    private $engine_size;
    private $wheels;
    private $regstration_number;
    private $fuel_type;
    
   // constructor
    public function __construct($colour, $body_type, $engine_size, $wheels, $regstration_number, $fuel_type)
    {
        // echo "constructor working..". PHP_EOL;
        $this->colour = $colour;
        $this->body_type = $body_type;
        $this->engine_size = $engine_size;
        $this->wheels = $wheels;
        $this->regstration_number = $regstration_number;
        $this->fuel_type = $fuel_type;
    }

    // setters and getters

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @return mixed
     */
    public function getBodyType()
    {
        return $this->body_type;
    }

     /**
     * @return mixed
     */
    public function getEngineSize()
    {
        return $this->engine_size;
    }

     /**
     * @return mixed
     */
    public function getWheels()
    {
        return $this->body_type;
    }

     /**
     * @return mixed
     */
    public function getRegistrationNumber()
    {
        return $this->regstration_number;
    }

     /**
     * @return mixed
     */
    public function getFuelType()
    {
        return $this->fuel_type;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @param mixed $body_type
     */
    public function setBodyType($body_type)
    {
        $this->body_type = $body_type;
    }

    /**
     * @param mixed $engine_size
     */
    public function setEngineSize($engine_size)
    {
        $this->engine_size = $engine_size;
    }

    /**
     * @param mixed $wheels
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }

    /**
     * @param mixed $registration_number
     */
    public function setRegistrationNumber($regstration_number)
    {
        $this->regstration_number = $regstration_number;
    }

    /**
     * @param mixed $fuel_type
     */
    public function setFuelType($fuel_type)
    {
        $this->fuel_type = $fuel_type;
    }

}

//BMW Class
class bmw extends Vehicle{
    public function __construct()
    {
        echo "I'm a BMW! ". PHP_EOL;
    }

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour." becuase i am nuice " . PHP_EOL;
    }
}

// Instantiating a class 
$vehicle1 = new Vehicle("white", "SUV", "1.4", "4", "GP 23482", "petrol");
$vehicle1->setColour('black');
$color = $vehicle1->getColour();
echo "my vehicle1 color is ".$vehicle1->colour. PHP_EOL;

// $bmw = new bmw();


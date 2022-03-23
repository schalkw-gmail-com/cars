<?php

//TODO build out the vehicle main class. It should have all needed getters and setters.
/*
 * 
 */



class vehicles{
    
    //properties
    public $colour = 'white';
    private $body_type = "";
    private $engine_size = "";
    private $wheels ="";
    
    public $dashboard="none";
    
   
    public function __construct()
    {
        echo "I'm a vehicle". PHP_EOL;
    }


    //functions
    function movement(){
        $this->colour = "white";
    }

    function speed(){
        
    }

    /**
     * @return mixed
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * @param mixed $colour
     */
    public function setColour($colour): void
    {
        $this->colour = $colour;
    }
}

class bmw extends vehicles{
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
$vehicle = new vehicles();
$bmw = new bmw();

echo "my colour is  ".$vehicle->getColour(). PHP_EOL;
$vehicle->setColour('pink');
echo "my colour is  ".$vehicle->getColour(). PHP_EOL;


echo "my colour is  ".$bmw->getColour(). PHP_EOL;
$bmw->setColour('red');
echo "my colour is  ".$bmw->getColour(). PHP_EOL;



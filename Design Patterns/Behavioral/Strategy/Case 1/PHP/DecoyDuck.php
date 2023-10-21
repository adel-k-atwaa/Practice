<?php
namespace PHP;
require_once("Quak/QuakBehavior.php");
use PHP\Quak\QuakBehavior;
require_once("Fly/FlyBehavior.php");
use PHP\Fly\FlyBehavior;
require_once("Fly/NoFly.php");
use PHP\Fly\NoFly;
require_once("Quak/Mute.php");
use PHP\Quak\Mute;
require_once("Duck.php");
use PHP\Duck;

class DecoyDuck extends Duck implements QuakBehavior,FlyBehavior{
    
    function __construct()
    {
        $this->setQuakBehavior(new Mute());
        $this->setFlyBehavior(new NoFly());
    }

    function fly()
    {
        $this->getFlyBehavior()->fly();
    }

    function quak()
    {
        $this->getQuakBehavior()->quak();
    }

    function display()
    {
        echo "Displaying DecoyDuck";
    }
}
<?php
namespace PHP;
require_once("Quak/QuakBehavior.php");
use PHP\Quak\QuakBehavior;
require_once("Fly/FlyBehavior.php");
use PHP\Fly\FlyBehavior;
require_once("Fly/NoFly.php");
use PHP\Fly\NoFly;
require_once("Quak/Squeak.php");
use PHP\Quak\Squeak;
require_once("Duck.php");
use PHP\Duck;

class RubberDuck extends Duck implements QuakBehavior,FlyBehavior{
    function __construct()
    {
        $this->setFlyBehavior(new NoFly());
        $this->setQuakBehavior(new Squeak());
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
        echo "Displaying RubberDuck";
    }
}
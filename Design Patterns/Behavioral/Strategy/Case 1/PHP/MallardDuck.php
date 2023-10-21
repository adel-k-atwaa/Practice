<?php
namespace PHP;
require_once("Quak/QuakBehavior.php");
use PHP\Quak\QuakBehavior;
require_once("Fly/FlyBehavior.php");
use PHP\Fly\FlyBehavior;
require_once("Fly/FlyWithWings.php");
use PHP\Fly\FlyWithWings;
require_once("Quak/Quak.php");
use PHP\Quak\Quak;
require_once("Duck.php");
use PHP\Duck;


class MallardDuck extends Duck implements QuakBehavior,FlyBehavior{
    
    function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuakBehavior(new Quak());    
    }

    function fly(){
        $this->getFlyBehavior()->fly();
    }

    function quak(){
        $this->getQuakBehavior()->quak();
    }

    function display(){
        echo 'displaying MallardDuck';
    }
}
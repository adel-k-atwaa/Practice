<?php
namespace PHP;
// include_once("require.php");
require_once("Quak/QuakBehavior.php");
use PHP\Quak\QuakBehavior;
require_once("Fly/FlyBehavior.php");
use PHP\Fly\FlyBehavior;

abstract class Duck{
    private QuakBehavior $quakBehavior;
    private FlyBehavior $flyBehavior;

    function setFlyBehavior(FlyBehavior $flyBehavior){
        $this->flyBehavior=$flyBehavior;
    }

    function setQuakBehavior(QuakBehavior $quakBehavior){
        $this->quakBehavior=$quakBehavior;
    }

    function getQuakBehavior():QuakBehavior{
        return $this->quakBehavior;
    }

    function getFlyBehavior():FlyBehavior{
        return $this->flyBehavior;
    }


    function swim(){
        echo "Swimming";
    }

    abstract function display();
}
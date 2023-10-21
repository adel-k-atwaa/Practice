<?php
namespace PHP\Fly;
require_once("FlyBehavior.php");
use PHP\Fly\FlyBehavior;

class NoFly implements FlyBehavior{

    function fly(){
        echo "can't fly";
    }
}
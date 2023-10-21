<?php
namespace PHP\Fly;
require_once("FlyBehavior.php");
use PHP\Fly\FlyBehavior;

class FlyWithWings implements FlyBehavior{

    function fly(){
        echo "Flying Flying";
    }
}
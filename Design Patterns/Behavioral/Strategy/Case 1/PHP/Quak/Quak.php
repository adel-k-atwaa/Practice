<?php
namespace PHP\Quak;
// include_once("require.php");
include_once("QuakBehavior.php");
use PHP\Quak\QuakBehavior;

class Quak implements QuakBehavior{

    function quak(){
        echo "quak quak quak";
    }
}
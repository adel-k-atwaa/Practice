<?php
namespace PHP\Quak;
// include_once("require.php");
include_once("QuakBehavior.php");
use PHP\Quak\QuakBehavior;

class Squeak implements QuakBehavior{

    function quak(){
        echo 'Squeak Squeak Squeak';
    }
}
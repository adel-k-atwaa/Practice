<?php
namespace PHP\Quak;
// include_once("require.php");
include_once("QuakBehavior.php");
use PHP\Quak\QuakBehavior;

class Mute implements QuakBehavior{
    function quak()
    {
        echo "can't quak";
    }
}
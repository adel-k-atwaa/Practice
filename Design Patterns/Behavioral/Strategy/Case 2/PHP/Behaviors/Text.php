<?php
namespace PHP\Behaviors;
require_once("ShareBehavior.php");
use PHP\Behaviors\ShareBehavior;
class Text implements ShareBehavior{
    function share()
    {
        print("Share By Text");
    }
}
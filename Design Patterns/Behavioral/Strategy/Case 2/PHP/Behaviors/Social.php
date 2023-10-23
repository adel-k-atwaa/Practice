<?php
namespace PHP\Behaviors;
require_once("ShareBehavior.php");
use PHP\Behaviors\ShareBehavior;

class Social implements ShareBehavior{
    public function share()
    {
        print("Share By Social");
    }
}
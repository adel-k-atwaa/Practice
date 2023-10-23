<?php
namespace PHP\Behaviors;
require_once("ShareBehavior.php");
use PHP\Behaviors\ShareBehavior;

class Email implements ShareBehavior{
    
    public function share(){
        print("Share By Mail");
    }
}
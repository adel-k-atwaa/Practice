<?php
namespace PHP;
require_once("Behaviors/ShareBehavior.php");
use PHP\Behaviors\ShareBehavior;

abstract class PhoneCameraAPP{

    private ShareBehavior $shareBehavior;

    function getShareBehavior():ShareBehavior{
        return $this->shareBehavior;
    }

    function setShareBehavior(ShareBehavior $shareBehavior){
        $this->shareBehavior=$shareBehavior;
    }

    abstract function edit();

    function performShare(){
        $this->shareBehavior->share();
    }

    function take(){
        print("Picture taken");
    }

    function save(){
        print("Picture Saved");
    }
}
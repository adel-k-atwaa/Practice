<?php
namespace PHP;
require_once("Behaviors/Text.php");
require_once("PhoneCameraApp.php");

use PHP\Behaviors\Text;
use PHP\PhoneCameraAPP;
class BasicCameraApp extends PhoneCameraAPP{
    function __construct()
    {
        $this->setShareBehavior(new Text());
    }
    function edit(){
        print("BasicCamera App edit");
    }
}
<?php
namespace PHP;
require_once("Behaviors/Social.php");
require_once("PhoneCameraApp.php");

use PHP\Behaviors\Social;
use PHP\PhoneCameraAPP;
class CameraPlusApp extends PhoneCameraAPP{

    function __construct()
    {
        $this->setShareBehavior(new Social());
    }
    function edit(){
        print("CameraPlusApp App edit");
    }
}
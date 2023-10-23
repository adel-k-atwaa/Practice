<?php
namespace PHP;
require_once("BasicCameraApp.php");
require_once("CameraPlusApp.php");
require_once("Behaviors/Email.php");
use PHP\CameraPlusApp;
use PHP\BasicCameraApp;
use PHP\Behaviors\Email;

$cameraPlusApp = new CameraPlusApp();
$basicCameraApp = new BasicCameraApp();


print("\n\n------------------------------ \n");
print("CameraPlusApp");
print("\n\n------------------------------ \n");
$cameraPlusApp->take();
print("\n");
$cameraPlusApp->edit();
print("\n");
$cameraPlusApp->save();
print("\n");
$cameraPlusApp->performShare();
print("\n");
$cameraPlusApp->setShareBehavior(new Email());
$cameraPlusApp->performShare();

print("\n___________________________________\n");

print("\n\n------------------------------ \n");
print("BasicCameraApp");
print("\n\n------------------------------ \n");
$basicCameraApp->take();
print("\n");
$basicCameraApp->edit();
print("\n");
$basicCameraApp->save();
print("\n");
$basicCameraApp->performShare();
print("\n");
$basicCameraApp->setShareBehavior(new Email());
$basicCameraApp->performShare();
print("\n___________________________________\n");
<?php
namespace PHP;
require_once("require.php");

use PHP\Fly\FlyWithWings;
use PHP\Quak\Mute;
use PHP\DecoyDuck;
use PHP\MallardDuck;
use PHP\RedHeadDuck;
use PHP\RubberDuck;

$decoyDuck = new DecoyDuck();
$mallardDuck = new MallardDuck();
$redHeadDuck = new RedHeadDuck();
$rubberDuck = new RubberDuck();

print("\n\n------------------------------ \n");
$decoyDuck->display();
print("\n------------------------------ \n");
print("\n");
$decoyDuck->fly();
print("\n");
$decoyDuck->swim();
print("\n");
$decoyDuck->quak();
print("\n");
$decoyDuck->setFlyBehavior(new FlyWithWings());
$decoyDuck->fly();
print("\n___________________________________\n");

print("\n\n------------------------------ \n");
$mallardDuck->display();
print("\n------------------------------ \n");
print("\n");
$mallardDuck->fly();
print("\n");
$mallardDuck->swim();
print("\n");
$mallardDuck->quak();
print("\n");
$mallardDuck->setQuakBehavior(new Mute());
$mallardDuck->quak();
print("\n___________________________________\n");

print("\n\n------------------------------ \n");
$rubberDuck->display();
print("\n------------------------------ \n");
print("\n");
$rubberDuck->fly();
print("\n");
$rubberDuck->swim();
print("\n");
$rubberDuck->quak();
print("\n___________________________________\n");


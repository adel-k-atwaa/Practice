from DecoyDuck import DecoyDuck
from RedHeadDuck import RedHeadDuck
from RubberDuck import RubberDuck
from Fly.FlyWithWings import FlyWithWings

decoy_duck = DecoyDuck()
red_head_duck = RedHeadDuck()
rubber_duck = RubberDuck()

decoy_duck.fly()
decoy_duck.quak()
print("-------------------------")

decoy_duck.setFlyBehavior(FlyWithWings())
decoy_duck.fly()
print("-------------------------")

red_head_duck.fly()
red_head_duck.quak()
print("-------------------------")

rubber_duck.fly()
rubber_duck.quak()
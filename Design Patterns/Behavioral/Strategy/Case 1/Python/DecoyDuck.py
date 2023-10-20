from Duck import Duck
from Fly.FlyBehavior import FlyBehavior
from Quak.QuackBehavior import QuackBehavior
from Fly.NoFly import NoFly
from Quak.Mute import Mute
class DecoyDuck(Duck,FlyBehavior,QuackBehavior):

    def __init__(self) -> None:
        Duck.__init__(self)
        self.setFlyBehavior(NoFly())
        self.setQuakBehavior(Mute())
    
    def fly(self):
        self.getFlyBehavior().fly()

    def quak(self):
        self.getQuakBehavior().quak()

    def dispay():
        pass

    def swim():
        pass
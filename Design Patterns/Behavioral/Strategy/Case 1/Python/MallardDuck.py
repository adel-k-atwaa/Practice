from Duck import Duck
from Fly.FlyBehavior import FlyBehavior
from Fly.FlyWithWings import FlyWithWings
from Quak.QuackBehavior import QuackBehavior
from Quak.Quak import Quak

class MallardDuck(Duck,FlyBehavior,QuackBehavior):

    def __init__(self) -> None:
        Duck.__init__(self)
        self.setFlyBehavior(FlyWithWings())
        self.setQuakBehavior(Quak())
    
    def fly(self):
        self.getFlyBehavior().fly()

    def quak(self):
        self.getQuakBehavior().quak()

    def dispay():
        pass

    def swim():
        pass
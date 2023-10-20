from Duck import Duck
from Fly.FlyBehavior import FlyBehavior
from Fly.NoFly import NoFly
from Quak.QuackBehavior import QuackBehavior
from Quak.Squeak import Squeak


class RubberDuck(Duck,FlyBehavior,QuackBehavior):

    def __init__(self) -> None:
        Duck.__init__(self)
        self.setFlyBehavior(NoFly())
        self.setQuakBehavior(Squeak())
    
    def fly(self):
        self.getFlyBehavior().fly()

    def quak(self):
        self.getQuakBehavior().quak()

    def dispay():
        pass

    def swim():
        pass
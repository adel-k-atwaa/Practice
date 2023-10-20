from Quak.QuackBehavior import QuackBehavior
from Fly.FlyBehavior import FlyBehavior
from DuckInterface import DuckInterface
class Duck(DuckInterface):
    
    def __init__(self) -> None:
        self.__flyBehavior:FlyBehavior=None
        self.__quakBehavior:QuackBehavior= None
    

    def setQuakBehavior(self,quak:QuackBehavior):
        self.__quakBehavior=quak


    def setFlyBehavior(self,fly:FlyBehavior):
        self.__flyBehavior=fly
    

    def getFlyBehavior(self)->FlyBehavior:
        return self.__flyBehavior
    

    def getQuakBehavior(self)->QuackBehavior:
        return self.__quakBehavior


    def dispay():
        pass

    def swim():
        pass
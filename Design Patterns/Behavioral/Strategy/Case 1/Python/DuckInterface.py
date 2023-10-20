from abc import ABC,abstractmethod
class DuckInterface(ABC):
    @abstractmethod
    def dispay():
        pass

    @abstractmethod
    def swim():
        pass
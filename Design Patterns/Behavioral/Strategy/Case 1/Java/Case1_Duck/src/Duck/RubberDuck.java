package Duck;

import Behaviours.Fly.FlyBehaviour;
import Behaviours.Fly.NoFly;
import Behaviours.Quack.QuackBehaviour;
import Behaviours.Quack.Squeak;

public class RubberDuck extends Duck implements FlyBehaviour, QuackBehaviour {
    public RubberDuck(){
        this.setFlyBehaviour(new NoFly());
        this.setQuackBehaviour(new Squeak());
    }
    @Override
    public void fly() {
        this.getFlyBehaviour().fly();
    }

    @Override
    public void quack() {
        this.getQuackBehaviour().quack();
    }

    @Override
    public void display() {
        System.out.println("Display RubberDuck");
    }
}

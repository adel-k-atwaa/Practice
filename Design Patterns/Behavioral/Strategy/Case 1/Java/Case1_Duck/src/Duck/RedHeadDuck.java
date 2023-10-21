package Duck;

import Behaviours.Fly.FlyBehaviour;
import Behaviours.Fly.FlyWithWings;
import Behaviours.Quack.Quack;
import Behaviours.Quack.QuackBehaviour;

public class RedHeadDuck extends Duck implements QuackBehaviour, FlyBehaviour {

    RedHeadDuck(){
        this.setFlyBehaviour(new FlyWithWings());
        this.setQuackBehaviour(new Quack());
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
        System.out.println("Display RedHeadDuck");
    }
}

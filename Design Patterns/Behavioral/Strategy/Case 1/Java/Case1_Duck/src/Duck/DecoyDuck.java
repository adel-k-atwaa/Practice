package Duck;

import Behaviours.Fly.FlyBehaviour;
import Behaviours.Fly.NoFly;
import Behaviours.Quack.Mute;
import Behaviours.Quack.QuackBehaviour;

public class DecoyDuck extends Duck implements QuackBehaviour, FlyBehaviour {
    public DecoyDuck(){
        this.setFlyBehaviour(new NoFly());
        this.setQuackBehaviour(new Mute());
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
        System.out.println("Display DecoyDuck");
    }
}

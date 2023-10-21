import Behaviours.Fly.FlyWithWings;
import Behaviours.Fly.NoFly;
import Behaviours.Quack.Mute;
import Behaviours.Quack.Quack;
import Duck.DecoyDuck;
import Duck.MallardDuck;
import Duck.RubberDuck;

public class Main {
    public static void main(String[] args) {

//        System.out.println("Hello world!");
        RubberDuck rubberDuck = new RubberDuck();
        rubberDuck.display();
        rubberDuck.swim();
        rubberDuck.fly();
        rubberDuck.quack();
        rubberDuck.setQuackBehaviour(new Mute());
        rubberDuck.quack();

        System.out.println("__________________________________________");

        MallardDuck mallardDuck = new MallardDuck();
        mallardDuck.display();
        mallardDuck.swim();
        mallardDuck.fly();
        mallardDuck.quack();
        mallardDuck.setFlyBehaviour(new NoFly());
        mallardDuck.fly();

        System.out.println("__________________________________________");

        DecoyDuck decoyDuck = new DecoyDuck();
        decoyDuck.display();
        decoyDuck.swim();
        decoyDuck.fly();
        decoyDuck.quack();
        decoyDuck.setFlyBehaviour(new FlyWithWings());
        decoyDuck.fly();
        decoyDuck.setQuackBehaviour(new Quack());
        decoyDuck.quack();
    }

}
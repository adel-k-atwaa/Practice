package Behaviours.Fly;

public class NoFly implements FlyBehaviour{
    @Override
    public void fly() {
        System.out.println("can\'t fly");
    }
}

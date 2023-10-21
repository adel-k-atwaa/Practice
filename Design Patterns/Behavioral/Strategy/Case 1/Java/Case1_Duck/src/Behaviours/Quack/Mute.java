package Behaviours.Quack;

public class Mute implements QuackBehaviour {

    @Override
    public void quack() {
        System.out.println("No Sound");
    }
}

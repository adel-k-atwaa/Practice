abstract class PhoneCameraApp {
    private ShareBehavior share;
    public void take(){

    }

    abstract public void edit();

    public void save(){

    }

    public void setShare(ShareBehavior share) {
        this.share = share;
    }

    public void preformShare(){
        share.share();
    }
}

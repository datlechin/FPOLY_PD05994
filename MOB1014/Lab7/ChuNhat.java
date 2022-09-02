package Lab7;

public class ChuNhat {
    private double rong;
    private double dai;

    public ChuNhat(double rong, double dai) {
        setRong(rong);
        setDai(dai);
    }

    public double getRong() {
        return rong;
    }

    public void setRong(double rong) {
        this.rong = rong;
    }

    public double getDai() {
        return dai;
    }

    public void setDai(double dai) {
        this.dai = dai;
    }

    public double getChuVi() {
        return (getDai() + getRong()) * 2;
    }

    public double getDienTich() {
        return getDai() * getRong();
    }

    public void xuat() {
        System.out.println("Chiều dài: " + getDai() + " Chiều rộng: " + getRong() + " Chu vi: " + getChuVi() + " Diện tích: " + getDienTich());
    }
}

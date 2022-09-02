package Lab7;

public class Vuong extends ChuNhat {
    private double canh;

    public Vuong(double canh) {
        super(canh, canh);
        setCanh(canh);
    }

    public double getCanh() {
        return canh;
    }

    public void setCanh(double canh) {
        this.canh = canh;
    }

    public void xuat() {
        System.out.println("Cạnh: " + getCanh() + " Chu vi: " + super.getChuVi() + " Diện tích: " + super.getDienTich());
    }
}

package Lab4.Bai3;

public class Main {
    public static void main(String[] args) {
        SanPham sp = new SanPham("Ao", 100000, 10000);
        SanPham sp1 = new SanPham("Quan", 200000);
        sp.xuat();
        System.out.println();
        sp1.xuat();
    }
}

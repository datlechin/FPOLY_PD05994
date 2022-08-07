package Lab6;

import java.util.ArrayList;
import java.util.Scanner;

public class Bai2 {
    public static void main(String[] args) {
        ArrayList<SanPham> listSp = new ArrayList<>();
        Scanner sc = new Scanner(System.in);

        System.out.print("Nhập số lượng sản phẩm: ");
        int n = sc.nextInt();

        for (int i = 0; i < n; i++) {
            System.out.println("\nNhập thông tin sản phẩm thứ " + (i + 1));
            SanPham sp = new SanPham();
            sp.nhap();
            listSp.add(sp);
        }

        System.out.println("\nDanh sách sản phẩm hãng Nokia: ");
        for (SanPham sp : listSp) {
            sp.xuat();
        }
    }
}

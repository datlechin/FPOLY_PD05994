package Lab7;

import java.util.Scanner;

public class Bai1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Nhập chiều rộng: ");
        double rong = sc.nextDouble();
        System.out.print("Nhập chiều dài: ");
        double dai = sc.nextDouble();
        System.out.print("Nhập cạnh: ");
        double canh = sc.nextDouble();

        ChuNhat chuNhat = new ChuNhat(rong, dai);
        Vuong vuong = new Vuong(canh);

        System.out.println("\nHình chữ nhật");
        chuNhat.xuat();
        System.out.println("\nHình vuông");
        vuong.xuat();
    }
}

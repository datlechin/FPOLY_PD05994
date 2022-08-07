package Lab3;

import java.util.Scanner;

public class Bai1 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhap mot so nguyen: ");
        int soNguyen = scanner.nextInt();

        boolean soNguyenTo = true;

        for (int i = 2; i < soNguyen; i++) {
            if (soNguyen % i == 0) {
                soNguyenTo = false;
                break;
            }
            i++;
        }

        if (soNguyenTo) {
            System.out.println(soNguyen + " la so nguyen to");
        } else {
            System.out.println(soNguyen + " khong phai la so nguyen to");
        }
    }
}

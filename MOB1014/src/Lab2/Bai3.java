package Lab2;

import java.util.Scanner;

public class Bai3 {
    public static void main(String[] args) {
        double amount;
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhập số điện sử dụng của tháng: ");
        int soDien = scanner.nextInt();

        if (soDien < 50) {
            amount = (double) soDien * 1000;
        } else {
            amount = (double) 50 * 1000 + (soDien - 50) * 1200;
        }

        System.out.println("Số tiền phải trả là: " + amount);
    }
}

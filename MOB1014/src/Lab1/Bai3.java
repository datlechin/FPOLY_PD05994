package Lab1;

import java.util.Scanner;

public class Bai3 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhập cạnh khối lập phương: ");
        double canh = scanner.nextDouble();

        double theTich = Math.pow(canh, 3);
        System.out.printf("Thể tích khối lập phương có cạnh %f là %f \n", canh, theTich);
    }
}

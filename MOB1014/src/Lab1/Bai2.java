package Lab1;

import java.util.Scanner;

public class Bai2 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Chiều dài: ");
        int height = scanner.nextInt();
        System.out.print("Chiều rộng: ");
        int width = scanner.nextInt();

        int chuVi = (height + width) * 2;
        int dienTich = height * width;
        int canhNhoNhat = Math.min(height, width);

        System.out.println();
        System.out.println("Chu vi: " + chuVi);
        System.out.println("Diện tích: " + dienTich);
        System.out.println("Cạnh nhỏ nhất: " + canhNhoNhat);
    }
}

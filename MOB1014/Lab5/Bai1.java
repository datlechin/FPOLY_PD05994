package Lab5;

import java.util.ArrayList;
import java.util.Scanner;

public class Bai1 {
    public static void main(String[] args) {
        ArrayList<Double> arr = new ArrayList<>();

        Scanner sc = new Scanner(System.in);
        System.out.print("Nhập số lượng số thực của mảng: ");
        int n = sc.nextInt();

        for (int i = 0; i < n; i++) {
            System.out.print("Nhập số thực thứ " + (i + 1) + ": ");
            arr.add(sc.nextDouble());
        }

        System.out.println("\nCác số thực của danh sách là: ");
        for (Double x : arr) {
            System.out.print(x + " ");
        }
    }
}

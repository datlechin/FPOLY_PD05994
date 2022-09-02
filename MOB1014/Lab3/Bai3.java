package Lab3;

import java.util.Arrays;
import java.util.Scanner;

public class Bai3 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Nhập số phần tử của mảng: ");
        int n = scanner.nextInt();

        int[] array = new int[n];

        for (int i = 0; i < array.length; i++) {
            System.out.print("Nhập phần tử thứ " + (i + 1) + ": ");
            array[i] = scanner.nextInt();
        }

        System.out.println();
        System.out.println("Các phần tử của mảng: " + Arrays.toString(array));

        Arrays.sort(array);
        System.out.println("Mảng sau khi sắp xếp: " + Arrays.toString(array));

        int min = array[0];
        for (int i = 1; i < array.length; i++) {
            if (array[i] < min) {
                min = Math.min(min, array[i]);
            }
        }
        System.out.println("Phần tử nhỏ nhất trong mảng là: " + min);

        int sum = 0;
        int count = 0;
        for (int i = 0; i < array.length; i++) {
            if (array[i] % 3 == 0) {
                sum += array[i];
                count++;
            }
        }
        float avg = (float) sum / count;
        System.out.println("Tổng các phần tử chia hết cho 3 trong mảng là: " + avg);
    }
}

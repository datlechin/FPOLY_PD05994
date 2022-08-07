package Lab3;

public class Bai2 {
    public static void main(String[] args) {
        for (int i = 2; i < 10; i++) {
            System.out.printf("Bang nhan %d\n", i);
            for (int j = 1; j <= 10; j++) {
                System.out.printf("%d * %d = %d\n", i, j, j * i);
            }
            System.out.println();
        }
    }
}

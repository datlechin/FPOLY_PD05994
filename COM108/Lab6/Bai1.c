#include <stdio.h>

int main() {
    int n;

    printf("Nhap so phan tu cua mang: ");
    scanf("%d", &n);

    int array[n];

    for (int i = 0; i < n; i++) {
        printf("Nhap phan tu thu %d: ", i + 1);
        scanf("%d", &array[i]);
    }

    float sum = 0;
    float avg;
    int count = 0;

    for (int i = 0; i < n; i++) {
        if (array[i] % 3 == 0) {
            sum += array[i];
            count++;
        }
    }

    avg = sum / count;

    printf("Tong cac phan tu chia het cho 3 la: %.2f\n", avg);

    return 0;
}
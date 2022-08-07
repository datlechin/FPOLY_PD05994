#include <stdio.h>

int main() {
    int n;
    int max;
    int min;

    printf("Nhap so phan tu cua mang: ");
    scanf("%d", &n);

    int array[n];

    for (int i = 0; i < n; i++) {
        printf("Nhap phan tu thu %d: ", i + 1);
        scanf("%d", &array[i]);
    }

    for (int i = 0; i < n; i++) {
        if (array[i] > max) {
            max = array[i];
        }
    }

    min = array[0];

    for (int i = 0; i < n; i++) {
        if (min > array[i]) {
            min = array[i];
        }
    }

    printf("Phan tu lon nhat trong mang la: %d\n", max);
    printf("Phan tu nho nhat trong mang la: %d\n", min);

    return 0;
}
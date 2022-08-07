#include <stdio.h>

int main() {
    int n, m;
    int squared;

    printf("Nhap so phan tu mang n: ");
    scanf("%d", &n);
    printf("Nhap so phan tu mang m: ");
    scanf("%d", &m);

    int array[n][m];

    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            printf("Nhap phan tu thu [%d][%d]: ", i, j);
            scanf("%d", &array[i][j]);
        }
    }

    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            squared = array[i][j] * array[i][j];

            printf("%d ", squared);
        }
        printf("\n");
    }

    return 0;
}
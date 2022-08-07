#include <stdio.h>

// Chuong trinh tinh tong hieu 2 so a, b
int main()
{
    int a;
    int b;
    int c;

    printf("Nhap so a: ");
    scanf_s("%d", &a);

    printf("Nhap so b: ");
    scanf_s("%d", &b);

    c = a + b;
    printf("%d + %d = %d \n", a, b, c);

    c = a - b;
    printf("%d - %d = %d", a, b, c);

    return 0;
}
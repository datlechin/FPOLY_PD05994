#include <stdio.h>

void swap(int *a, int *b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}

int main()
{
    int a, b;

    printf("Nhap so a: ");
    scanf("%d", &a);
    printf("Nhap so b: ");
    scanf("%d", &b);

    swap(&a, &b);

    printf("Hoan vi cua a la %d \n", a);
    printf("Hoan vi cua b la %d", b);

    return 0;
}

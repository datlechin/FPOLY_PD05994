#include <stdio.h>

int findMaxNumber(int num1, int num2, int num3)
{
    int max = num1;
    if (num2 > max)
    {
        max = num2;
    }
    if (num3 > max)
    {
        max = num3;
    }
    return max;
}

int main()
{
    int num1, num2, num3;
    int max;

    printf("Nhap so thu nhat: ");
    scanf("%d", &num1);
    printf("Nhap so thu hai: ");
    scanf("%d", &num2);
    printf("Nhap so thu ba: ");
    scanf("%d", &num3);

    max = findMaxNumber(num1, num2, num3);

    printf("So lon nhat trong 3 so %d, %d, %d la: %d", num1, num2, num3, max);

    return 0;
}
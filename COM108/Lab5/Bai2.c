#include <stdio.h>

int checkLaapYear(int year)
{
    if (year % 400 == 0)
    {
        return 1;
    }
    else if (year % 100 == 0)
    {
        return 0;
    }
    else if (year % 4 == 0)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

int main()
{
    int year;
    printf("Nhap nam: ");
    scanf("%d", &year);

    if (checkLaapYear(year))
    {
        printf("%d la nam nhuan", year);
    }
    else
    {
        printf("%d khong phai nam nhuan", year);
    }

    return 0;
}

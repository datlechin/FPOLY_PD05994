#include <stdio.h>

int main()
{
	int x;
	int count = 0;

	printf("Nhap so x: ");
	scanf_s("%d", &x);

	for (int i = 2; i < x; i++)
	{
		if (x % i == 0)
		{
			count++;
		}
	}

	if (count == 0)
	{
		printf("%d la so nguyen to", x);
	}
	else
	{
		printf("%d khong phai la so nguyen to", x);
	}

	return 0;
}
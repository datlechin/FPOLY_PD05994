#include <stdio.h>

int main()
{
	float a;
	float b;
	float x;

	printf("Nhap so a: ");
	scanf_s("%f", &a);
	printf("Nhap so b: ");
	scanf_s("%f", &b);

	if (a == 0)
	{
		if (b == 0)
		{
			printf("Phuong trinh co vo so nghiem");
		}
		else if (b != 0)
		{
			printf("Phuong trinh vo nghiem");
		}
	}
	else
	{
		x = -b / a;
		printf("Phuong trinh co nghiem la %g", x);
	}

	return 0;
}
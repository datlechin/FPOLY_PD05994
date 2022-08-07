#include <stdio.h>
#include <math.h>

int main()
{
	float a;
	float b;
	float c;
	float x;
	float x1;
	float x2;
	float delta;

	printf("Nhap so a: ");
	scanf_s("%f", &a);
	printf("Nhap so b: ");
	scanf_s("%f", &b);
	printf("Nhap so c: ");
	scanf_s("%f", &c);

	if (a == 0)
	{
		x = -c / b;
		printf("Phuong trinh bat nhat %gx - %g = 0 la %g", b, c, x);
	}
	else if (a != 0)
	{
		delta = b * b - 4 * a * c;
		if (delta < 0)
		{
			printf("Phuong trinh vo nghiem");
		}
		else if (delta == 0)
		{
			x = -b / (2 * a);
			printf("Phuong trinh co nghiem kep x %g", x);
		}
		else if (delta > 0)
		{
			x1 = (-b + sqrt(delta)) / (2 * a);
			x2 = (-b - sqrt(delta)) / (2 * a);
			printf("Phuong trinh co 2 nghiem la %f va %f", x1, x2);
		}
	}

	return 0;
}
#include <stdio.h>
#include <math.h>
#include <stdlib.h>

int rankedAcademic()
{
	float score;
	printf("Nhap diem cua sinh vien: ");
	scanf_s("%f", &score);

	if (score >= 9 && score <= 10)
	{
		printf("Diem cua ban la %g, ban dat hoc luc xuat sac", score);
	}
	else if (score >= 8 && score < 9)
	{
		printf("Diem cua ban la %g, ban dat hoc luc gioi", score);
	}
	else if (score >= 6.5 && score < 8)
	{
		printf("Diem cua ban la %g, ban dat hoc luc kha", score);
	}
	else if (score >= 5 && score < 6.5)
	{
		printf("Diem cua ban la %g, ban dat hoc luc trung binh", score);
	}
	else if (score >= 3.5 && score < 5)
	{
		printf("Diem cua ban la %g, ban dat hoc luc yeu", score);
	}
	else if (score >= 0 && score < 3.5)
	{
		printf("Diem cua ban la %g, ban dat hoc luc kem", score);
	}
	else
	{
		printf("Diem ban nhap vao khong hop le");
	}

	return  0;
}

int inequality1()
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

	return  0;
}

int inequality2()
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

int electricityPrice()
{
	int kWh;
	float price;

	printf("Nhap so dien tieu thu hang thang: ");
	scanf_s("%d", &kWh);

	if (kWh >= 0 && kWh <= 50)
	{
		price = kWh * 1.678;
	}
	else if (kWh >= 51 && kWh <= 100)
	{
		price = kWh * 1.734;
	}
	else if (kWh >= 101 && kWh <= 200)
	{
		price = kWh * 2.014;
	}
	else if (kWh >= 201 && kWh <= 300)
	{
		price = kWh * 2.536;
	}
	else if (kWh >= 301 && kWh <= 400)
	{
		price = kWh * 2.834;
	}
	else if (kWh >= 401)
	{
		price = kWh * 2.927;
	}
	else
	{
		price = 0;
	}

	printf("So tien can phai dong la %f VND", price);

	return 0;
}

int main()
{
	int choose;

	printf("MENU - Ngo Quoc Dat (pd05994) \n");
	printf("______________________________ \n \n");
	printf("1. Tinh hoc luc cua sinh vien \n");
	printf("2. Giai phuong trinh bac 1 \n");
	printf("3. Giai phuong trinh bac 2 \n");
	printf("4. Tinh tien dien \n");
	printf("5. Dong chuong trinh \n \n");
	printf("Vui long nhap lua chon cua ban: ");

	scanf_s("%d", &choose);

	switch (choose)
	{
	case 1:
		printf("\nTinh hoc luc cua sinh vien \n");
		printf("______________________________ \n");
		rankedAcademic();
		break;
	case 2:
		printf("\nGiai phuong trinh bac 1 \n");
		printf("______________________________ \n");
		inequality1();
		break;
	case 3:
		printf("\nGiai phuong trinh bac 2 \n");
		printf("______________________________ \n");
		inequality2();
		break;
	case 4:
		printf("\nTinh tien dien \n");
		printf("______________________________ \n");
		electricityPrice();
		break;
	case 5:
		exit(0);
		break;
	default:
		printf("Lua chon cua ban khong hop le, vui long nhap lai");
		scanf_s("%d", &choose);
		break;
	}

	return 0;
}
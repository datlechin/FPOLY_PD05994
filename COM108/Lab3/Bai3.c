#include <stdio.h>

int main()
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
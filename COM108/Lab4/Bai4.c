#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>

int avgSumDivideBy2()
{
	int min;
	int max;
	int sum = 0;
	int avg = 0;
	int count = 0;

	printf("Nhap gia tri min: ");
	scanf_s("%d", &min);
	printf("Nhap gia tri max: ");
	scanf_s("%d", &max);

	int i = min;

	while (i <= max)
	{
		if (i % 2 == 0)
		{
			sum += i;
			count++;
		}
		i++;
	}

	avg = sum / count;

	printf("Trung binh tong cua cac so tu nhien chia het cho 2 tu %d den %d la %d \n", min, max, avg);

	return 0;
}

int determinePrimeNumber()
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

int determineSquareNumbers()
{
	int x;
	bool pass = false;

	printf("Nhap so x: ");
	scanf_s("%d", &x);

	for (int i = 0; i < x; i++)
	{
		if (i * i == x)
		{
			pass = true;
			break;
		}
	}

	if (pass == true)
	{
		printf("%d la so chinh phuong", x);
	}
	else
	{
		printf("%d khong phai so chinh phuong", x);
	}

	return 0;
}

int main()
{
	int choose = 0;

	do
	{
		system("cls");
		printf("__________________________________________________________ \n");
		printf("| 1. Tinh trung binh tong cac so tu nhien chia het cho 2 | \n");
		printf("| 2. Xac dinh so nguyen to                               | \n");
		printf("| 3. Kiem tra so chinh phuong                            | \n");
		printf("| 4. Thoat chuong trinh                                  | \n");
		printf("__________________________________________________________ \n");

		printf("Nhap lua chon cua ban (1, 2, 3, 4): ");
		scanf_s("%d", &choose);

		switch (choose)
		{
		case 1:
			printf("\nTinh trung binh tong cac so tu nhien chia het cho 2 \n \n");
			avgSumDivideBy2();
			break;
		case 2:
			printf("\nXac dinh so nguyen to \n \n");
			determinePrimeNumber();
			break;
		case 3:
			printf("\nKiem tra so chinh phuong \n \n");
			determineSquareNumbers();
			break;
		case 4:
			printf("\nDa thoat chuong trinh \n \n");
			exit(1);
			break;
		default:
			printf("\nLua chon khong hop le, vui long chon lai \n \n");
		}
		printf("\nNhap phim bat ky va enter de tiep tuc: ");
		fflush(stdin);
		getchar();
	} while (choose != 0);

    return 0;
}
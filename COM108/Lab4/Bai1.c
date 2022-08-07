#include <stdio.h>

int main()
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

	printf("Trung binh tong cua cac so tu nhien chia het cho 2 tu %d den %d la %d", min, max, avg);

	return 0;
}
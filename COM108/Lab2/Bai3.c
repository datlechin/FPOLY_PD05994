#include <stdio.h>

#define PI 3.14159265359

// Chuong trinh tinh chu vi, dien tich hinh tron
int main()
{
	int radius;
	int P;
	int S;

	printf("Nhap ban kinh hinh tron: ");
	scanf_s("%d", &radius);

	P = radius * 2 * PI;
	S = radius * radius * PI;

	printf("Chu vi hinh tron la %d \n", P);
	printf("Dien tich hinh tron la %d", S);

	return 0;
}
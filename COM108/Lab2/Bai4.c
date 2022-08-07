#include <stdio.h>

// Chuong trinh tinh diem trung binh mon toan, ly, hoa
int main()
{
	float math;
	float geography;
	float chemistry;
	float gpa;

	printf("Nhap diem mon toan: ");
	scanf_s("%f", &math);
	printf("Nhap diem mon ly: ");
	scanf_s("%f", &geography);
	printf("Nhap diem mon hoa: ");
	scanf_s("%f", &chemistry);

	gpa = ((math * 3) + (geography * 2) + (chemistry * 1)) / 5;

	printf("Diem trung binh cua 3 mon la: %1.2f", gpa);

	return 0;
}
#include <stdio.h>

// Chuong trinh tinh chu vi, dien tich hinh chu nhat
int main()
{
	int height;
	int width;
	int perimeter;
	int area;

	printf("Nhap chieu dai HCN: ");
	scanf_s("%d", &height);

	printf("Nhap chieu rong HCN: ");
	scanf_s("%d", &width);

	perimeter = (height + width) * 2;
	area = height * width;

	printf("Chu vi HCN la %d \n", perimeter);
	printf("Dien tich HCN la %d", area);

	return 0;
}
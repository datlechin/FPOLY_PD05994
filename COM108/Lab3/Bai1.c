#include <stdio.h>

int main()
{
	float score;
	printf("Nhap diem cua sinh vien: ");
	scanf_s("%f", &score);

	// only accept score between 0 and 10
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

	return 0;
}
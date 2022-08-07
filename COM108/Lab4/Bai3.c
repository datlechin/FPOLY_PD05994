#include <stdio.h>
#include <stdbool.h>

int main()
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
#define _CRT_SECURE_NO_WARNINGS
#include <stdio.h>

int main() {
	int broken_number=0;
	int broken_number2=0,broken_number3 = 0;
	int size=0;
	int i = 0;
	int j = 0;
	int number = 0;
	int square = 1;
	int square2 = 1;
	int sub_number = 0;
	if(scanf("%d",&broken_number)) ;
	broken_number2 = broken_number;
	while ((broken_number2/10)!=0)
	{
		size++;
		broken_number2 /= 10;
	}
	size++;
	broken_number2 = broken_number;
	for (; i < size; i++) {
		broken_number3 = broken_number2;
		number = broken_number3 % 10;
		if (number > 4)
			number = 1;
		else
			number = 0;
		sub_number += number*square2;
		broken_number3 /= 10;
		
		for (j = 1; j < size;j++) {
			number = broken_number3 % 10;
			if (number > 4)
				number = number-1;
			else
				number = number;
			sub_number += square*number*square2;

			broken_number3 /= 10;
			square *= 9;
		}
		square2 *= 10;
		square = 1;
		broken_number2 /= 10;
	}
	printf("%d", broken_number - sub_number);
	return 0;
}

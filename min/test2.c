#define _CRT_SECURE_NO_WARNINGS
#include<stdio.h>
#include<stdlib.h>



int main() {
	int n;
	int** ballons;
	double* ballons_size;
	int* compare_index;

	int i, j;
	int data, data1;
		FILE *fp;
		fp = fopen("test.txt", "r");
	
		fscanf(fp, "%d", &n);
		printf("%d\n", n);

	ballons = (int**)malloc(sizeof(int*)*n);
	ballons_size = (double*)malloc(sizeof(double)*n);
	compare_index = (int*)malloc(sizeof(int)*(n + 2));
	for (i = 0; i < n; i++) {
		ballons[i] = (int*)malloc(sizeof(int) * 2);
		fscanf(fp, "%d %d\n", &data, &data1);
				ballons[i][0] = data;
				ballons[i][1] = data1;
	}
	fclose(fp);

	ballons_size[0] = (double)ballons[0][1];
	compare_index[0] = 1;
	compare_index[1] = 0;
	int ballon_index = 0;
	double temp_radius = 0;
	double radius;
	int flag;
	int flag2;
	for (i = 1; i < n; i++) {
		temp_radius = 0;
		radius = 0;
		flag2 = 1;
		for (j = 0; j < compare_index[0]; j++) {


			ballon_index = compare_index[j + 1];
			radius = ((double)ballons[i][0] - (double)ballons[ballon_index][0])*((double)ballons[i][0] - (double)ballons[ballon_index][0]) / (ballons_size[ballon_index] * 4);
			if (flag2 == 1 && radius > 0) {
				temp_radius = radius;
				flag2 = 0;
			}
			if (flag2 == 0)
				if (temp_radius > radius)
					temp_radius = radius;
		}

		if (temp_radius >(double)(ballons[i][1]))
			temp_radius = (double)(ballons[i][1]);

		ballons_size[i] = temp_radius;
		flag = 1;
		for (j = 1; j <= compare_index[0]; j++) {
			ballon_index = compare_index[j];
			if (ballons_size[i] >= ballons_size[ballon_index]) {
				compare_index[j] = i;
				compare_index[0] = j;
				flag = 0;
				break;
			}
		}
		if (flag) {

			compare_index[compare_index[0] + 1] = i;
			compare_index[0] = compare_index[0] + 1;
		}


	}
	fp = fopen("test3.txt", "w");
	for (i = 0; i < n; i++) {

		fprintf(fp, "%.3f\n", ballons_size[i]);
	}

	fclose(fp);

	for (i = 0; i < n; i++) {
		free(ballons[i]);

	}
	free(ballons);
	free(ballons_size);
	free(compare_index);

	return 0;
}

#include<stdio.h>
#include<stdlib.h>
#include<math.h>

double rounding(double value);
int main() {
	int n;
	int** ballons;
	double* ballons_size;
	
	int i, j;
	scanf("%d", &n);
	ballons = (int**)malloc(sizeof(int*)*n);
	ballons_size = (double*)malloc(sizeof(double)*n);
	
	for (i = 0; i < n; i++) {
		ballons[i] = (int*)malloc(sizeof(int) * 2);
		scanf("%d", &ballons[i][0]);
		scanf("%d", &ballons[i][1]);
	}


	ballons_size[0] = (double)ballons[0][1];
	
	int ballon_index = 0;
	double temp_radius = 0;
	double radius;
	
	for (i = 1; i < n; i++) {

		for (j = 0; j < i; j++) {

			ballon_index = j;
			if (ballons_size[ballon_index] != 0)
				radius = (((double)ballons[i][0] - (double)ballons[ballon_index][0])*((double)ballons[i][0] - (double)ballons[ballon_index][0])) / (4 * ballons_size[ballon_index]);
			else
				;
			if (j == 0)
				temp_radius = radius;
			if (temp_radius > radius)
				temp_radius = radius;
		}

		if (temp_radius > (double)(ballons[i][1]))
			temp_radius = (double)(ballons[i][1]);

		ballons_size[i] = temp_radius;
		
		

	}

	for (i = 0; i < n; i++) {
		printf("%.3lf\n", rounding(ballons_size[i]));
	}



	for (i = 0; i < n; i++) {
		free(ballons[i]);

	}
	free(ballons);
	free(ballons_size);
	

	return 0;
}
double rounding(double value) {
	int n = 3;
	int p = pow(10, n);
	double result = floor((value*p) + 0.5) / p;
	return result;
}

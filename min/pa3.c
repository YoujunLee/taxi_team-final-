#include<stdio.h>

int main() {

	int f_number_point, g_number_point;
	int **f_point, **g_point;
	int p = 0, q = 0;
	int i = 0;
	int f_index = 0, g_index = 0, f_index2 = 0, g_index2 = 0;
	int start_f_x_point, start_g_x_point;
	int result = 0;


	scanf("%d", &f_number_point);

	f_point = (int**)malloc(sizeof(int*)*f_number_point);

	for (; i < f_number_point; i++) {
		f_point[i] = (int*)malloc(sizeof(int) * 2);
	}

	for (i = 0; i < f_number_point; i++) {
		scanf("%d %d", &f_point[i][0], &f_point[i][1]);
	}

	scanf("%d", &g_number_point);

	g_point = (int**)malloc(sizeof(int*)*g_number_point);

	for (i = 0; i < g_number_point; i++) {
		g_point[i] = (int*)malloc(sizeof(int) * 2);
	}

	for (i = 0; i < g_number_point; i++) {
		scanf("%d %d", &g_point[i][0], &g_point[i][1]);
	}

	start_f_x_point = f_point[0][0];
	start_g_x_point = g_point[0][0];

	scanf("%d %d", &p, &q);

	if (q < start_f_x_point && q < start_g_x_point) {
		printf("%d",0);
		return 0;
	}
	else if (q < start_f_x_point) {

		if (start_g_x_point>p) {

			while (p < start_g_x_point) {
				p++;
			}

		}
		else {
			for (g_index = 1; g_index < g_number_point; g_index++) {
				if (p < g_point[g_index][0]) {

					break;
				}
			}
			g_index--;
		}
		g_index2 = g_index;
		while (q >= g_point[g_index2][0]) {
			if (g_index2 + 1 < g_number_point) {
				g_index2++;

			}
			else {
				g_index2++;
				break;
			}

		}
		g_index2--;
		result = (g_point[g_index][1])*(q - p + 1);
		result = result % 10007;
		for (i = g_index+1; i <= g_index2; i++) {
			result += (g_point[i][1]- g_point[i-1][1])*(q-g_point[i][0]+1);
			result = result % 10007;
		}
		printf("%d\n", result % 10007);

		return 0;
	}
	else if (q < start_g_x_point) {

		if (start_f_x_point>p) {

			while (p < start_f_x_point) {
				p++;
			}

		}
		else {
			for (f_index = 1; f_index < f_number_point; f_index++) {
				if (p < f_point[f_index][0]) {

					break;
				}
			}
			f_index--;
		}
		f_index2 = f_index;
		while (q >= f_point[f_index2][0]) {
			if (f_index2 + 1 < f_number_point) {
				f_index2++;

			}
			else {
				f_index2++;
				break;
			}

		}
		f_index2--;
		result = (f_point[f_index][1])*(q - p + 1);
		result = result % 10007;
		for (i = f_index + 1; i <= f_index2; i++) {
			result += (f_point[i][1] - f_point[i - 1][1])*(q - f_point[i][0] + 1);
			result = result % 10007;
		}
		printf("%d\n", result % 10007);

		return 0;

	}
	else {
		int p2=p;
		if (start_f_x_point>p) {

			while (p < f_point[f_index][0]) {
				p++;
			}

		}
		else {
			for (f_index = 1; f_index < f_number_point; f_index++) {
				if (p < f_point[f_index][0]) {

					break;
				}
			}
			f_index--;
		}
		f_index2 = f_index;
		while (q >= f_point[f_index2][0]) {
			if (f_index2 + 1 < f_number_point) {
				f_index2++;

			}
			else {
				f_index2++;
				break;
			}

		}
		f_index2--;

		if (start_g_x_point>p2) {

			while (p2 < g_point[g_index][0]) {
				p2++;
			}

		}
		else {
			for (g_index = 1; g_index < g_number_point; g_index++) {
				if (p2 < g_point[g_index][0]) {

					break;
				}
			}
			g_index--;
		}
		g_index2 = g_index;
		while (q >= g_point[g_index2][0]) {
			if (g_index2 + 1 < g_number_point ) {
				g_index2++;

			}
			else {
				g_index2++;
				break;
			}

		}
		g_index2--;

		int switch_number=0;
		if (p2 > p) {
			result = (f_point[f_index][1])*(q - p + 1);
			result = result % 10007;
			switch_number = f_point[f_index][1];
			f_index++;
			while ((f_index <= f_index2)&&(g_index <= g_index2)) {
				if (f_point[f_index][0] < g_point[g_index][0]) {
					if (switch_number<f_point[f_index][1]) {
						result += (f_point[f_index][1] - switch_number)*(q - f_point[f_index][0] + 1);
						result = result % 10007;
						switch_number = f_point[f_index][1];
						f_index++;
					}
					else {
						f_index++;
					}
				}
				else if (f_point[f_index][0] >= g_point[g_index][0]) {
					if (switch_number<g_point[g_index][1]) {
						result += (g_point[g_index][1] - switch_number)*(q - g_point[g_index][0] + 1);
						result = result % 10007;
						switch_number = g_point[g_index][1];
						g_index++;
					}
					else {
						g_index++;
					}
				}


			}
			if (f_index > f_index2) {
				while (g_index <= g_index2) {
					if (switch_number<g_point[g_index][1]) {
						result += (g_point[g_index][1] - switch_number)*(q - g_point[g_index][0] + 1);
						result = result % 10007;
						switch_number = g_point[g_index][1];
						g_index++;
					}
					else {
						g_index++;
					}
				}
			}

			if (g_index  > g_index2) {
				while (f_index <= f_index2) {
					if (switch_number<f_point[f_index][1]) {
						result += (f_point[f_index][1] - switch_number)*(q - f_point[f_index][0] + 1);
						result = result % 10007;
						switch_number = f_point[f_index][1];
						f_index++;
					}
					else {
						f_index++;
					}
				}
			}


			printf("%d\n", result % 10007);
			return 0;
		}
		else if (p >= p2) {
			result = (g_point[g_index][1])*(q - p2 + 1);
			result = result % 10007;
			switch_number = g_point[g_index][1];
			g_index++;
			while ((f_index <= f_index2) && (g_index <= g_index2)) {
				if (f_point[f_index][0] < g_point[g_index][0]) {
					if (switch_number<f_point[f_index][1]) {
						result += (f_point[f_index][1] - switch_number)*(q - f_point[f_index][0] + 1);
						result = result % 10007;
						switch_number = f_point[f_index][1];
						f_index++;
					}
					else {
						f_index++;
					}
				}
				else if (f_point[f_index][0] >= g_point[g_index][0]) {
					if (switch_number<g_point[g_index][1]) {
						result += (g_point[g_index][1] - switch_number)*(q - g_point[g_index][0] + 1);
						result = result % 10007;
						switch_number = g_point[g_index][1];
						g_index++;
					}
					else {
						g_index++;
					}
				}


			}
			if (f_index  > f_index2) {
				while (g_index <= g_index2) {
					if (switch_number<g_point[g_index][1]) {
						result += (g_point[g_index][1] - switch_number)*(q - g_point[g_index][0] + 1);
						result = result % 10007;
						switch_number = g_point[g_index][1];
						g_index++;
					}
					else {
						g_index++;
					}
				}
			}

			if (g_index  > g_index2) {
				while (f_index <= f_index2) {
					if (switch_number<f_point[f_index][1]) {
						result += (f_point[f_index][1] - switch_number)*(q - f_point[f_index][0] + 1);
						result = result % 10007;
						switch_number = f_point[f_index][1];
						f_index++;
					}
					else {
						f_index++;
					}
				}
			}


			printf("%d\n", result % 10007);
			return 0;


		}



	}




	return 0;
}
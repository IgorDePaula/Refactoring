
public class Triangulo{

	
	public static void main(String[] args) {
		a=12;
		b=6;
		c=8;
		if (a <= b+c || b <= a+c || c <= a+b)
		        System.out.println("Os lados formam um triângulo. \n");
	        else
		        System.out.println("Os lados não formam um triângulo. \n");

		if ((a == b)&& (b == c)&& (c == a)){
	            System.out.println("Triangulo Equilátero");
        
            }
            else
                if ((a != b)&& (b != c)&& (c != a)){
                    System.out.println("Triangulo Escaleno");

                }
            else
                System.out.println("Triangulo Isósceles");


	double base, altura, area;

	base=24;

	altura=15;

	area=(base*altura)/2;

	System.out.println(”A área do Triângulo é:”+area);

	}

}
